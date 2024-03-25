<?php
// Definindo dois arrays associativos que representam as notas de dois bimestres.
$notasBimestre1 = [
    'Vinicius' => 6,
    'joao' => 8,
    'Ana' => 10,
    'Roberto' => 7,
    'Maria' => 9,
    'Luca' => 7
];
$notasBimestre2 = [
    'joao' => 8,
    'Ana' => 10,
    'Roberto' => null,
    'Maria' => 7,
];

// A função array_diff compara os valores dos arrays e retorna um array com as notas do primeiro bimestre que não se repetem no segundo.
var_dump(array_diff($notasBimestre1, $notasBimestre2));

// A função array_diff_key compara as chaves dos arrays e retorna um array com os alunos do primeiro bimestre que não estão presentes no segundo.
var_dump(array_diff_key($notasBimestre1, $notasBimestre2));

// A função array_diff_assoc compara os valores e as chaves dos arrays e retorna um array com os alunos e suas notas do primeiro bimestre que não estão presentes no segundo com a mesma chave e valor.
var_dump(array_diff_assoc($notasBimestre1, $notasBimestre2));

// Aqui, a função array_diff_key é usada para encontrar os alunos que estão presentes no primeiro bimestre, mas não no segundo. As chaves e valores deste array são então extraídos usando as funções array_keys e array_values, respectivamente.
$alunosFaltantes = array_diff_key($notasBimestre1, $notasBimestre2);
var_dump(array_keys($alunosFaltantes)); // Retorna todas as chaves do array $alunosFaltantes
var_dump(array_values($alunosFaltantes)); // Retorna todos os valores do array $alunosFaltantes

// Aqui, as chaves e valores extraídos são combinados em um novo array usando a função array_combine. A função array_flip é então usada para trocar as chaves e valores do array.
$nomesAlunos = array_keys($alunosFaltantes); // Extrai as chaves do array $alunosFaltantes
$notasAlunos = array_values($alunosFaltantes); // Extrai os valores do array $alunosFaltantes
var_dump(array_combine($notasAlunos, $nomesAlunos)); // Combina os valores e chaves em um novo array
var_dump(array_flip($alunosFaltantes)); // Troca as chaves e valores do array $alunosFaltantes
?>
