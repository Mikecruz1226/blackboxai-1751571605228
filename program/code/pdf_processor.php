<?php

class PDFProcessor {
    private $pdftkPath;
    private $uploadDir;
    
    public function __construct() {
        $this->pdftkPath = realpath(__DIR__ . "/../PDFtk/bin/pdftk");
        $config = parse_ini_file(__DIR__ . "/../../config.ini", true);
        $this->uploadDir = $config['UPLOAD_DIR'] ?? './files/uploads/';
    }
    
    /**
     * Extract text from a PDF file
     */
    public function extractText($pdfFile) {
        if (!file_exists($pdfFile)) {
            throw new Exception("PDF file not found: " . $pdfFile);
        }

        // Use pdftk to extract text content
        $txtFile = tempnam(sys_get_temp_dir(), 'pdf_');
        // Use pdftotext if available, otherwise try pdftk
        if (exec('which pdftotext')) {
            $command = sprintf('pdftotext "%s" -', $pdfFile);
        } else {
            $command = sprintf('"%s" "%s" cat output -', 
                $this->pdftkPath,
                $pdfFile
            );
        }
        
        exec($command, $output, $returnVar);
        
        if ($returnVar !== 0) {
            throw new Exception("Failed to extract text from PDF");
        }
        
        return implode("\n", $output);
    }
    
    /**
     * Analyze vesting schedule text using pattern matching
     */
    public function analyzeVestingSchedule($text) {
        $vestingInfo = [
            'schedule_type' => null,
            'years' => [],
            'percentages' => []
        ];
        
        // Common vesting schedule patterns
        $patterns = [
            // Match "Year X - Y%" pattern
            '/Year\s*(\d+)\s*-\s*(\d+)%/i',
            // Match "X years - Y%" pattern
            '/(\d+)\s*years?\s*-\s*(\d+)%/i',
            // Match "X% after Y years" pattern
            '/(\d+)%\s*after\s*(\d+)\s*years?/i'
        ];
        
        foreach ($patterns as $pattern) {
            if (preg_match_all($pattern, $text, $matches)) {
                for ($i = 0; $i < count($matches[0]); $i++) {
                    $year = $matches[1][$i];
                    $percentage = $matches[2][$i];
                    $vestingInfo['years'][] = intval($year);
                    $vestingInfo['percentages'][] = intval($percentage);
                }
            }
        }
        
        // Determine schedule type based on patterns found
        if (!empty($vestingInfo['years'])) {
            $maxYear = max($vestingInfo['years']);
            if ($maxYear <= 3) {
                $vestingInfo['schedule_type'] = '3 Year Vesting';
            } elseif ($maxYear <= 5) {
                $vestingInfo['schedule_type'] = '5 Year Vesting';
            } else {
                $vestingInfo['schedule_type'] = $maxYear . ' Year Vesting';
            }
        }
        
        return $vestingInfo;
    }
    
    /**
     * Process all PDFs in upload directory
     */
    public function processAllPDFs() {
        $results = [];
        $pdfs = glob($this->uploadDir . "*.pdf");
        
        foreach ($pdfs as $pdf) {
            try {
                $text = $this->extractText($pdf);
                $vestingInfo = $this->analyzeVestingSchedule($text);
                $results[basename($pdf)] = $vestingInfo;
            } catch (Exception $e) {
                error_log("Error processing PDF {$pdf}: " . $e->getMessage());
                $results[basename($pdf)] = ['error' => $e->getMessage()];
            }
        }
        
        return $results;
    }
}
