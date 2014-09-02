<?php

class pdfController extends controller {

    private $_pdf;

    public function __construct() {
        parent::__construct();
        $this->getLibrary('fpdf');
        $this->_pdf = new FPDF();
    }

    public function index() {
        
    }

    public function pdf1($nombre, $apellido) {

        $this->_pdf->AddPage();
        $this->_pdf->SetFont('Arial', 'B', 16);
        $this->_pdf->Cell(40, 10, utf8_decode($nombre . ' ' . $apellido));
        $this->_pdf->Output();
    }

}

?>

