<?php
// Arrays com notas multidimensionais
$nota = [
    [
        'Aluno' => 'Maria',
        'Nota' => 10,
    ],
    [
        'Aluno' => 'Vinicius',
        'Nota' => 6,
    ],
    [
        'Aluno' => 'Ana',
        'Nota' => 9,
    ]
];

// Função de comparação para ordenar as notas
function ordenNotas(array $nota1, array $nota2): int
{
    // Compara as notas dos alunos
    if ($nota1['Nota'] > $nota2['Nota']) {
        return -1; // Retorna -1 para indicar que $nota1 vem antes de $nota2
    }
    else if ($nota2['Nota'] > $nota1['Nota']) {
        return 1; // Retorna 1 para indicar que $nota2 vem antes de $nota1
    }
    return 0; // Retorna 0 se as notas forem iguais
    // Também é possível usar a função de comparação <=> como alternativa
    // return $nota1['Nota'] <=> $nota2['Nota'];
}

// Ordena o array de notas usando a função de comparação definida
usort($nota, 'ordenNotas');

// Exibe o array de notas ordenadas
var_dump($nota);

 /*
  Comentários adicionais:
   |- O código define uma função ordenNotas() para comparar as notas dos alunos.
   |- A função usort() é usada para ordenar o array $nota com base na função de comparação ordenNotas().
   |- A função de comparação retorna:
       |- -1 se $nota1 deve vir antes de $nota2.
       |- 1 se $nota2 deve vir antes de $nota1.
       |- 0 se as notas forem iguais.
   |- O array $nota é então ordenado com base nas notas dos alunos usando usort().
   |- Finalmente, o array ordenado é exibido usando var_dump().
  */
?>
