<?php
require (__DIR__.'/../vjass.php');

$operators .= "|{|}|++|--|;";
$blocks    .= "|include|do|whilenot|#define|define|#error|enum|endenum|setdef";
$types     .= "|int|bool|void";

$language_data['KEYWORDS'] = Array(
                new JassKeywordGroup(explode("|", $values),     'JASSvalue'),
                new JassKeywordGroup(explode("|", $operators),  'JASSoperator'),
                new JassKeywordGroup(explode("|", $keywords),   'JASSkeyword'),
                new JassKeywordGroup(explode("|", $blocks),     'JASSblock'),
                new JassKeywordGroup(explode("|", $natives),    'JASSnative'),
                new JassKeywordGroup(explode("|", $bjs),        'JASSbj'),
                new JassKeywordGroup(explode("|", $constants),  'JASSconstant'),
                new JassKeywordGroup(explode("|", $types),      'JASStype'),
                new JassKeywordGroup(explode("|", $bjglobals),  'JASSbjglobal'));
?>