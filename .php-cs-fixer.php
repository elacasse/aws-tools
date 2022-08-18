<?php

$finder = PhpCsFixer\Finder::create()
                           ->in(__DIR__ . '/src')
                           ->exclude(
                               [
                                   'vendor'
                               ]
                           );

$config = new PhpCsFixer\Config();

return $config->setRules(
    [
        '@PhpCsFixer'                 => true,
        '@PSR12'                      => true,
        'array_syntax'                => ['syntax' => 'short'],
        'phpdoc_align'                => ['align' => 'vertical'],
        'binary_operator_spaces'      => ['default' => 'align_single_space_minimal'],
        'no_alternative_syntax'       => ['fix_non_monolithic_code' => false],
        'blank_line_before_statement' => [
            'statements' =>
                [
                    'break',
                    'case',
                    'continue',
                    'do',
                    'exit',
                    'for',
                    'foreach',
                    'goto',
                    'if',
                    'return',
                    'switch',
                    'throw',
                    'try',
                    'while',
                    'yield',
                    'yield_from'
                ]
        ]
    ]
)->setFinder($finder);
