<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pauta;

use App\Libraries\FPDF\FPDF;

class PDFController extends Controller
{
    public function gerarPDF()
    {
        // Consulte os dados do banco de dados usando o Eloquent
        $dados = Pauta::all();

        // Crie um novo arquivo PDF
        $pdf = new FPDF();
        $pdf->AddPage();

        // Define as larguras das colunas da tabela
        $col_width = 40;

        // Cabeçalho da tabela
        $pdf->SetFont('Arial', 'B', 12);
        $pdf->Cell($col_width, 10, 'Nome 1', 1);
        $pdf->Cell($col_width, 10, 'P-1 ', 1);
        $pdf->Cell($col_width, 10, 'P-2 ', 1);
        $pdf->Cell($col_width, 10, 'P-3 ', 1);
       
        $pdf->Ln(); // Nova linha

        // Adicione os dados à tabela
        $pdf->SetFont('Arial', '', 10);
        foreach ($dados as $dado) {
            $pdf->Cell($col_width, 10, $dado->nome, 1);
            $pdf->Cell($col_width, 10, $dado->p1, 1);
            $pdf->Cell($col_width, 10, $dado->p2, 1);
            $pdf->Cell($col_width, 10, $dado->p3, 1);
           
            $pdf->Ln(); // Nova linha
        }

        // Saída do PDF
        $pdf->Output();
    }
}