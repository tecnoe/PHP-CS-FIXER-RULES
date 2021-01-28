<?php

$finder = Symfony\Component\Finder\Finder::create()
    ->notPath('vendor')
    ->notPath('bootstrap')
    ->notPath('storage')
    ->in(__DIR__)
    ->name('*.php')
    ->notName('*.blade.php');

return PhpCsFixer\Config::create()
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR2' => true,
        'psr4' => true,
        'array_syntax' => ['syntax' => 'short'],
        'ordered_imports' => ['sortAlgorithm' => 'alpha'],
        'no_unused_imports' => true,
        'no_extra_blank_lines' => ['extra', 'square_brace_block'],
        'not_operator_with_space' => true,
        'array_indentation' => true,
        'trim_array_spaces' => true,
        'method_separation' => true,
        'single_line_comment_style' => [
            'comment_types' => [
                'asterisk',
                'hash'
            ]
        ],
        'blank_line_before_statement' => [
            'statements' => ['if', 'for', 'foreach']
        ],
        // 'psr_autoloading' => [
        //     'dir' => null
        // ]
    ])
    ->setFinder($finder);
