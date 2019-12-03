<?php

$text = "Melhor preço sem escalas R$ 1.367(1)
Melhor preço com escalas R$ 994 (1)

1 - Incluindo todas as taxas.";

var_dump(preg_match_all('((com escalas)+ (R\$) ([0-9]{1})?(\.)?[0-9]{3})', $text));