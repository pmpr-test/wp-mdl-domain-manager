<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66ebd4bd005aa             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager\Model; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Common\Foundation\Interfaces\IconInterface; abstract class RelatedModel extends Common { const qkmqmaeuyokqgemg = "\144\x6f\x6d\141\x69\x6e\x5f\x69\144"; const ymamoeqaciwakwue = "\x70\x72\x69\x76\x69\154\x65\147\145\x64"; public function ckgmycmaukqgkosk() { parent::ckgmycmaukqgkosk(); $this->oyeskqayoscwciem()->myysgyqcumekoueo()->yioesawwewqaigow(IconInterface::emuwacasoaaageiq)->guiaswksukmgageq(__("\104\x6f\155\141\151\156", PR__MDL__DOMAIN_MANAGER))->muuwuqssqkaieqge(__("\x44\157\x6d\x61\151\156\163", PR__MDL__DOMAIN_MANAGER))->gemkqqguesukeocw()->wkesqcmiekqoykag()->aseucqksocwomwos()->qemeyueyiwgsokuc(["\160\157\x73\x69\x74\x69\x6f\156" => 5]); } public function ewaqwooqoqmcoomi() { $this->ckaemmoueyosqqkq([$this->eoaomaokwkwqyqiq(self::qkmqmaeuyokqgemg)->uwmyqckcyamwaiww(Domain::class)->geimymogiqyssawi()->wakqsiacyacmumuw()->jyumyyugiwwiqomk(0)->gswweykyogmsyawy(__("\104\157\155\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER)), $this->omkueasmegecueyk(self::ymamoeqaciwakwue)->eyygsasuqmommkua(0)->gswweykyogmsyawy(__("\104\157\x6d\141\x69\156\40\x50\x72\151\166\151\x6c\x65\147\x65", PR__MDL__DOMAIN_MANAGER))->qcssowoqeqysosca()]); parent::ewaqwooqoqmcoomi(); } public function aoqwywcqmoqaukkq() { $this->mkksewyosgeumwsa($this->mccagaqeagiikkec(self::qkmqmaeuyokqgemg)->ugquamoakekwyiqg(Domain::class))->mkksewyosgeumwsa($this->wcwmusaouiqaqeww(self::ymamoeqaciwakwue)); } public function uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig) { if (!($ukamowomoeiweqky = Ownership::symcgieuakksimmu())) { goto qkcyqocqqwmqgqww; } $ywoucyskcquysiwc["\157\167\156\145\x72\163\x68\151\160\x73"] = [Constants::qgqyauaqwqmqseim => $ukamowomoeiweqky->oyeskqayoscwciem()->qyyikeaseoskcacm(), Constants::qescuiwgsyuikume => $ukamowomoeiweqky->oyeskqayoscwciem()->qeeuwmmksmqiuywg(), Constants::ssmskyqgcmeiayco => $this->ywkiusmmqccekmaa($mksyucucyswaukig)]; qkcyqocqqwmqgqww: return parent::uuymkiygiuaiyema($ywoucyskcquysiwc, $mksyucucyswaukig); } public function ywkiusmmqccekmaa($mksyucucyswaukig) : string { $ewgwqamkygiqaawc = ''; $mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig); if (!$mokawwccycoiqeka) { goto acaqummmoyiemqss; } $kugmgyukuauikwke = Domain::symcgieuakksimmu()->iscemaoqqckmkago(Domain::geseccqgwqkukyuk, $mokawwccycoiqeka); if ($kugmgyukuauikwke) { goto wmmggowmigekyoso; } $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->ciuuiyckmsygceis(__("\116\x6f\40\x6f\167\156\145\x72\x73\x68\x69\x70\40\150\141\x73\x20\x62\x65\145\156\40\x72\x65\x67\151\163\x74\145\x72\x65\144\x20\146\157\x72\x20\x74\150\x69\163\40\x64\157\x6d\141\x69\x6e\x20\171\145\x74\56", PR__MDL__DOMAIN_MANAGER), ["\143\154\141\x73\163" => "\146\x6f\x6e\164\x2d\61\65"]); goto soqqemyioggmoakg; wmmggowmigekyoso: $essikcmqiyqaqoaq = []; $ueomouiqmosykioc = Ownership::symcgieuakksimmu(); $gkyciwoiiisgywcs = $this->caokeucsksukesyo()->ywqgcuymeiswqyqc(); foreach ($kugmgyukuauikwke as $ukamowomoeiweqky) { $gkswkiicccswksiq = $ueomouiqmosykioc->yomgsemomcmgekyi(Constants::ucmueuwwcmocgmig, $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Constants::ucmueuwwcmocgmig)); $mkucggyaiaukqoce = $gkyciwoiiisgywcs->get($ukamowomoeiweqky, Constants::meksegaoamowuwoq); if (!($mkucggyaiaukqoce && $gkswkiicccswksiq)) { goto ywqgcegomwaiuquc; } $essikcmqiyqaqoaq[] = [Constants::meksegaoamowuwoq => $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::squoamkioomemiyi => Constants::meksegaoamowuwoq, Constants::ckmqoekmugkggeym => $mkucggyaiaukqoce]), Constants::ucmueuwwcmocgmig => $gkswkiicccswksiq]; ywqgcegomwaiuquc: eegqyykygiccaoeo: } miyqyeiwquwsacsm: $ewgwqamkygiqaawc = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->kuumcaywkqiasisk($essikcmqiyqaqoaq, [Constants::gmosckicggqkicim => [Constants::meksegaoamowuwoq => __("\125\x73\145\x72", PR__MDL__DOMAIN_MANAGER), Constants::ucmueuwwcmocgmig => __("\103\x61\160\141\142\151\154\151\x74\171", PR__MDL__DOMAIN_MANAGER)], "\164\x61\x62\154\145\137\141\164\164\162\163" => ["\143\x6c\141\163\x73" => "\x66\x6f\156\164\x2d\61\x35\40\x74\x61\x62\x6c\x65\55\163\x74\x72\151\160\145\144\40\x74\x61\142\x6c\145\55\142\157\x72\144\x65\162\154\145\163\163"]]); soqqemyioggmoakg: acaqummmoyiemqss: return $ewgwqamkygiqaawc; } public function uikgwcuascgeissw($mksyucucyswaukig) : ?string { $pkyyagewkiyckmwy = $this->qogaqkcsogcqiaic($mksyucucyswaukig, self::qkmqmaeuyokqgemg, 0); if (!(is_numeric($pkyyagewkiyckmwy) && ($mokawwccycoiqeka = $this->iscemaoqqckmkago(self::qkmqmaeuyokqgemg, $mksyucucyswaukig)))) { goto eeqesooyqagwawae; } $pkyyagewkiyckmwy = Domain::symcgieuakksimmu()->uikgwcuascgeissw($mokawwccycoiqeka); if (!($this->wkcuasmkgoscaiay() || $this->uqiykqoyaqymcues())) { goto suswcqoyyqkkquuo; } $iwywmkygwewiamwm = $this->caokeucsksukesyo()->gyecsegqciqykomu()->mkcmkkskeeaskowy($this->caokeucsksukesyo()->ywqgcuymeiswqyqc()->get($mokawwccycoiqeka, Constants::ciyoccqkiamemcmm)); $pkyyagewkiyckmwy = $this->caokeucsksukesyo()->wmkogisswkckmeua()->ywggokoaagwwqyak([Constants::ogigqueukwysusii => "\x68\164\x74\160\x73\72\x2f\57{$iwywmkygwewiamwm}", Constants::qescuiwgsyuikume => $pkyyagewkiyckmwy]); suswcqoyyqkkquuo: eeqesooyqagwawae: return $pkyyagewkiyckmwy; } public function uskosecsqoiqwmua($mokawwccycoiqeka) { $ocyamgcyecguqyou = null; if (!($mokawwccycoiqeka = Domain::symcgieuakksimmu()->keeuqgyooycqoygw($mokawwccycoiqeka))) { goto oqugqwcyomiaaoqu; } $ocyamgcyecguqyou = $this->akkkoiiymmamsauc($mokawwccycoiqeka, self::qkmqmaeuyokqgemg); oqugqwcyomiaaoqu: return $ocyamgcyecguqyou; } public function kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, &$mksyucucyswaukig = null) { switch ($qgoqiacsiccwoawi) { case self::qkmqmaeuyokqgemg: $eqgoocgaqwqcimie = Domain::symcgieuakksimmu()->acouumccocekeswu($eqgoocgaqwqcimie); goto foeeqckqsyockkak; case self::ymamoeqaciwakwue: if ($eqgoocgaqwqcimie) { goto hoeeyiowekaeemko; } $wkaqekwwgqsqwcoi = IconInterface::ucomcyskmkiqysee; $sqeykgyoooqysmca = Constants::wyaqwomqwwaoiwas; $meqocwsecsywiiqs = __("\x50\162\x69\x76\151\x6c\x65\147\x65\144\40\104\x6f\155\141\151\x6e", PR__MDL__DOMAIN_MANAGER); goto kymkucucyeoeikim; hoeeyiowekaeemko: $wkaqekwwgqsqwcoi = IconInterface::ggokgkyiweugsokc; $sqeykgyoooqysmca = Constants::ckcawaoawwioqecq; $meqocwsecsywiiqs = __("\x4e\157\x74\x20\x50\x72\x69\166\151\154\145\147\145\144\x20\x44\x6f\155\x61\x69\x6e", PR__MDL__DOMAIN_MANAGER); kymkucucyeoeikim: $eqgoocgaqwqcimie = $this->caokeucsksukesyo()->wgqqgewcmcemoewo()->cuoygaaeqeqcuggu($wkaqekwwgqsqwcoi, ["\143\154\141\x73\163" => "\x66\165\154\154\x2d\157\x70\141\x63\x69\164\171\x20\151\x63\x6f\156\x2d\163\x6d\x20\151\x63\157\156\x2d{$sqeykgyoooqysmca}", "\x74\x69\164\154\x65" => $meqocwsecsywiiqs]); goto foeeqckqsyockkak; } iekumemscwieugqw: foeeqckqsyockkak: return parent::kamyqikiiuwqiiuw($qgoqiacsiccwoawi, $eqgoocgaqwqcimie, $mksyucucyswaukig); } }
