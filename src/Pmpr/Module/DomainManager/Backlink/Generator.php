<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67c839c5a069c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Backlink; use Pmpr\Common\Foundation\Interfaces\Constants; class Generator extends Common { public function cqykmuguekuoyuwy($qeqooyuoiasweuck) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $icwicymcioeyeyek = $this->aoqwsyoeawcgukgq($gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::awweqicqwikkykis, []), $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ameuayawimeoysmc, 1), (bool) $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::syoumqikoowgswma, false)); $icwicymcioeyeyek[Constants::ssmskyqgcmeiayco] = $this->wsigkciwyyuccqam($qeqooyuoiasweuck); $icwicymcioeyeyek[Constants::iuqumwggccmcuyem] = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::sikqccmyeogmuosk, 10); return $icwicymcioeyeyek; } private function wsigkciwyyuccqam($qeqooyuoiasweuck) : string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $mkcicuowyumccgew = $this->caokeucsksukesyo()->iyowqkwcwiuccgag(); $cwsgqcqycqgwgyqq = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::qigcuyyegqmimoym, 5); $aqoqsuikwegoowys = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::cyukygkewseoqouw, 10); $qekwoswickiesugo = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::oecykcwqcimuygkw, 1); $meqwccucgqqgqwuc = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::swikuukssgyqwkue, 6); $ukgsssmgkskkuoow = $this->ciiacegocgeuouea($gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ooqaewiocugokqco, [])); if ($cwsgqcqycqgwgyqq > $aqoqsuikwegoowys) { [$cwsgqcqycqgwgyqq, $aqoqsuikwegoowys] = [$aqoqsuikwegoowys, $cwsgqcqycqgwgyqq]; } if ($qekwoswickiesugo > $meqwccucgqqgqwuc) { [$qekwoswickiesugo, $meqwccucgqqgqwuc] = [$meqwccucgqqgqwuc, $qekwoswickiesugo]; } $gaeqamemwmwsyukm = $mkcicuowyumccgew->owsaaggskwmeemog($cwsgqcqycqgwgyqq, $aqoqsuikwegoowys); $momcykaoccoymeig = 1; $ewgwqamkygiqaawc = ''; $akesyikoueogakwq = $this->kkueyqkaummscuky($qeqooyuoiasweuck); $usemgeggswwgesiy = false; $aeusosmcqyyeyuiq = $mkcicuowyumccgew->owsaaggskwmeemog(0, $gaeqamemwmwsyukm); while ($gaeqamemwmwsyukm > $momcykaoccoymeig) { if (isset($ukgsssmgkskkuoow[$momcykaoccoymeig])) { $ssukygsemqwswumi = $ukgsssmgkskkuoow[$momcykaoccoymeig]; if ($ssukygsemqwswumi) { $ykiwomimkkuiigoq = $mkcicuowyumccgew->owsaaggskwmeemog($qekwoswickiesugo, $meqwccucgqqgqwuc); $scmssumoqgwqewig = []; while (count($ssukygsemqwswumi) > 0 && count($scmssumoqgwqewig) <= $ykiwomimkkuiigoq) { $iukyueweicuocgow = $gkyciwoiiisgywcs->gymccqywkegiqiiw($ssukygsemqwswumi); if (isset($ssukygsemqwswumi[$iukyueweicuocgow])) { $qaiwucaaikseawuw = $ssukygsemqwswumi[$iukyueweicuocgow]; $scmssumoqgwqewig[] = $gkyciwoiiisgywcs->get($qaiwucaaikseawuw, Constants::TEXT, ''); unset($ssukygsemqwswumi[$iukyueweicuocgow]); $ssukygsemqwswumi = array_values($ssukygsemqwswumi); } } if ($scmssumoqgwqewig) { if (!$usemgeggswwgesiy && $aeusosmcqyyeyuiq <= $momcykaoccoymeig) { $qmysesckygsyuoqk = $gkyciwoiiisgywcs->gymccqywkegiqiiw($scmssumoqgwqewig); $gkyciwoiiisgywcs->insert($scmssumoqgwqewig, $qmysesckygsyuoqk, $akesyikoueogakwq); $usemgeggswwgesiy = true; } $ewgwqamkygiqaawc .= implode(' ', $scmssumoqgwqewig); if ($gaeqamemwmwsyukm > $momcykaoccoymeig + 1) { $ewgwqamkygiqaawc .= PHP_EOL . PHP_EOL; } } } } $momcykaoccoymeig++; } if (!$usemgeggswwgesiy) { $ewgwqamkygiqaawc .= $akesyikoueogakwq; } return $ewgwqamkygiqaawc; } private function kkueyqkaummscuky($qeqooyuoiasweuck) : ?string { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $akesyikoueogakwq = ''; $yuwymayicwwqiske = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::mecugimsqkeicksm); $scqcgogsiaiksiiq = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ouauqossmqiwwsui); $camsiwwcswiuecgs = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::ogcquccysekeyisc); $ggcusimcgowkewyk = $gkyciwoiiisgywcs->get($qeqooyuoiasweuck, self::momcisyewgkeguye); $momcykaoccoymeig = $gkyciwoiiisgywcs->gymccqywkegiqiiw($camsiwwcswiuecgs); if (isset($camsiwwcswiuecgs[$momcykaoccoymeig])) { $ksiyqouuaoymsycg = $camsiwwcswiuecgs[$momcykaoccoymeig]; $akesyikoueogakwq = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->yuawgssgauywkiia(esc_html($gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::kweqeqcagwaiucik, '')), $this->caokeucsksukesyo()->ayueggmoqeeukqmq()->ycqquoiyyuesegsy($ggcusimcgowkewyk)); } return "{$yuwymayicwwqiske} {$akesyikoueogakwq} {$scqcgogsiaiksiiq}"; } private function aoqwsyoeawcgukgq($kiquukuikeymyooo, $wwqoakwweuiyqgco = 0, bool $jkwiusgeeuisquse = true) : array { $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); $wegougocoeeookww = $this->ciiacegocgeuouea($kiquukuikeymyooo); $mmwoqcwiwemokkue = 0; $aaokuekaimigoyue = $meqocwsecsywiiqs = []; foreach ($wegougocoeeookww as $kiquukuikeymyooo) { if ($wwqoakwweuiyqgco > 0 && $mmwoqcwiwemokkue > $wwqoakwweuiyqgco) { break; } $iukyueweicuocgow = $gkyciwoiiisgywcs->gymccqywkegiqiiw($kiquukuikeymyooo); if (isset($kiquukuikeymyooo[$iukyueweicuocgow]) && $kiquukuikeymyooo[$iukyueweicuocgow]) { $ksiyqouuaoymsycg = $kiquukuikeymyooo[$iukyueweicuocgow]; $aaokuekaimigoyue[] = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, Constants::ouywiegeiyuaaawo, ''); $meqocwsecsywiiqs[] = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, Constants::qescuiwgsyuikume, ''); $ykiwomimkkuiigoq = $gkyciwoiiisgywcs->get($ksiyqouuaoymsycg, self::ksssumoioemcmcgo, 1); $mmwoqcwiwemokkue += $ykiwomimkkuiigoq; } else { $mmwoqcwiwemokkue++; } } if ($jkwiusgeeuisquse) { $aaokuekaimigoyue = array_reverse($aaokuekaimigoyue); } return [Constants::ouywiegeiyuaaawo => implode('-', $aaokuekaimigoyue), Constants::qescuiwgsyuikume => implode(' ', $meqocwsecsywiiqs)]; } private function ciiacegocgeuouea($oammesyieqmwuwyi) : array { $sogksuscggsicmac = []; if ($oammesyieqmwuwyi) { foreach ($oammesyieqmwuwyi as $igqsaukqcqscimok) { if (isset($igqsaukqcqscimok[self::ugqsimokykgqaeiq])) { $sogksuscggsicmac[$igqsaukqcqscimok[self::ugqsimokykgqaeiq]][] = $igqsaukqcqscimok; } } } ksort($sogksuscggsicmac); return $sogksuscggsicmac; } }
