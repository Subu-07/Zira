<?php

$finder = PhpCsFixer\Finder::create()
    ->in(__DIR__ . '/src') 
    ->in(__DIR__ . '/tests')
    ->exclude('var') // Exclude cache/log directories if they exist
;

return (new PhpCsFixer\Config())
    ->setRules([
        '@PSR12' => true, // Enforce PSR-12 standard
        'array_syntax' => ['syntax' => 'short'], // Use [] for arrays
        'ordered_imports' => true, // Order use statements alphabetically
        'no_unused_imports' => true, // Remove unused imports
        'not_operator_with_successor_space' => true, // `! $foo` not `!$foo`
        'trailing_comma_in_multiline' => true, // Add trailing commas in multiline arrays
        'phpdoc_scalar' => true,
        'unary_operator_spaces' => true,
        'binary_operator_spaces' => true,
        'blank_line_before_statement' => [
            'statements' => ['return', 'if', 'for', 'foreach', 'while', 'switch', 'try'],
        ],
    ])
    ->setFinder($finder)
    ->setCacheFile(__DIR__.'/.php-cs-fixer.cache'); // Cache for faster runs
