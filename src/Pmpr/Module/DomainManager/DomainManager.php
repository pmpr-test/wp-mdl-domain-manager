<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             6728ed9b54e75             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\157\x6d\x61\x69\x6e\x20\115\x61\156\141\x67\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->gimisysaiasieees()) { REST::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x70\x61\156\x65\x6c")) { Panel::ksyueceqagwomguk(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\143\157\155\x70\x6f\x6e\x65\156\x74\55\x6d\141\156\x61\x67\145\162")) { Domain::symcgieuakksimmu(); Ownership::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } } }
