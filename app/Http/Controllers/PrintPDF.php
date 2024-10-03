<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;

class PrintPDF extends Controller
{
    public static function print(Request $request) {
        $fpdf = new Fpdf('P','mm','A4');
        $fpdf->AddPage();
        $fpdf->setTitle("Payslip");

        $fpdf->SetFont('Arial','B',16);
        $fpdf->Cell(0, 10, "Payslip", 0, 1, 'C');
        $fpdf->SetFont('Arial','',12);
        $fpdf->Cell(0, 6, "Zoondle Inc", 0, 1, 'C');
        $fpdf->Cell(0, 6, "21023 Pearson Point Road", 0, 1, 'C');
        $fpdf->Cell(0, 6, "Gateway Avenue", 0, 1, 'C');

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial','',12);
        $fpdf->Cell(50, 6, "Date of Joining :", 0, 0, 'L');
        $fpdf->Cell(60, 6, "2018-06-23", 0, 0, 'L');
        $fpdf->Cell(50, 6, "Employee Name :", 0, 0, 'L');
        $fpdf->Cell(0, 6, "Sally Harley", 0, 1, 'L');

        $fpdf->Cell(50, 6, "Pay Period :", 0, 0, 'L');
        $fpdf->Cell(60, 6, "August 2021", 0, 0, 'L');
        $fpdf->Cell(50, 6, "Designation :", 0, 0, 'L');
        $fpdf->Cell(0, 6, "Marketing Executive", 0, 1, 'L');

        $fpdf->Cell(50, 6, "Worked Days :", 0, 0, 'L');
        $fpdf->Cell(60, 6, "26", 0, 0, 'L');
        $fpdf->Cell(50, 6, "Department :", 0, 0, 'L');
        $fpdf->Cell(0, 6, "Marketing", 0, 1, 'L');

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial','B',12);
        $fpdf->Cell(130, 10, "Earnings", 1, 0, 'C');
        $fpdf->Cell(60, 10, "Amount", 1, 1, 'C');

        $fpdf->SetFont('Arial','',12);
        $fpdf->Cell(130, 10, "Basic", 1, 0, 'L');
        $fpdf->Cell(60, 10, "10000", 1, 1, 'R');

        $fpdf->Cell(130, 10, "Incentive Pay", 1, 0, 'L');
        $fpdf->Cell(60, 10, "1000", 1, 1, 'R');

        $fpdf->Cell(130, 10, "House Rent Allowance", 1, 0, 'L');
        $fpdf->Cell(60, 10, "400", 1, 1, 'R');

        $fpdf->Cell(130, 10, "Meal Allowance", 1, 0, 'L');
        $fpdf->Cell(60, 10, "200", 1, 1, 'R');

        $fpdf->SetFont('Arial','B',12);
        $fpdf->Cell(130, 10, "Total Earnings", 1, 0, 'L');
        $fpdf->Cell(60, 10, "11600", 1, 1, 'R');

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial','B',12);
        $fpdf->Cell(130, 10, "Deductions", 1, 0, 'C');
        $fpdf->Cell(60, 10, "Amount", 1, 1, 'C');

        $fpdf->SetFont('Arial','',12);
        $fpdf->Cell(130, 10, "Provident Fund", 1, 0, 'L');
        $fpdf->Cell(60, 10, "1200", 1, 1, 'R');

        $fpdf->Cell(130, 10, "Professional Tax", 1, 0, 'L');
        $fpdf->Cell(60, 10, "500", 1, 1, 'R');

        $fpdf->Cell(130, 10, "Loan", 1, 0, 'L');
        $fpdf->Cell(60, 10, "400", 1, 1, 'R');

        $fpdf->SetFont('Arial','B',12);
        $fpdf->Cell(130, 10, "Total Deductions", 1, 0, 'L');
        $fpdf->Cell(60, 10, "2100", 1, 1, 'R');

        $fpdf->Ln(10);

        $fpdf->SetFont('Arial','B',14);
        $fpdf->Cell(0, 10, "Net Pay", 0, 1, 'C');
        $fpdf->SetFont('Arial','',14);
        $fpdf->Cell(0, 10, "9500", 0, 1, 'C');
        $fpdf->Cell(0, 10, "Nine Thousand Five Hundred", 0, 1, 'C');

        $fpdf->Ln(20);

        $fpdf->SetFont('Arial','',12);
        $fpdf->Cell(95, 10, "Employer Signature", 0, 0, 'L');
        $fpdf->Cell(95, 10, "Employee Signature", 0, 1, 'R');
        $fpdf->Cell(95, 10, "____________________", 0, 0, 'L');
        $fpdf->Cell(95, 10, "____________________", 0, 1, 'R');

        $fpdf->Ln(20);

        $fpdf->SetFont('Arial','I',10);
        $fpdf->Cell(0, 10, "This is a system generated payslip", 0, 1, 'C');

        $fpdf->Output();
        exit;
    }
}



