<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670517673e6e1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\x61\x69\156\x20\x4d\x61\x6e\x61\x67\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { if (!$this->caokeucsksukesyo()->owicscwgeuqcqaig()->aqwquwewocyewasw()) { goto mggeqkcksyaymcsa; } REST::symcgieuakksimmu(); mggeqkcksyaymcsa: } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if (!$qgiimcueymgqcsai->iqqgmieeqemiowuk("\160\141\156\x65\154")) { goto uegouoiuyoqkcscg; } Panel::ksyueceqagwomguk(); uegouoiuyoqkcscg: if (!$qgiimcueymgqcsai->iqqgmieeqemiowuk("\x63\157\155\x70\x6f\x6e\x65\156\164\55\155\141\156\x61\x67\x65\162")) { goto cgyakcqgugqgkqiw; } Domain::symcgieuakksimmu(); Ownership::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); cgyakcqgugqgkqiw: } }
