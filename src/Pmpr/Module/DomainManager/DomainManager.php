<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             671fc0827c7ee             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\x61\x69\x6e\40\x4d\141\156\141\x67\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->gimisysaiasieees()) { REST::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x70\141\156\145\x6c")) { Panel::ksyueceqagwomguk(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\143\157\155\x70\157\156\x65\x6e\x74\55\x6d\141\156\x61\147\145\x72")) { Domain::symcgieuakksimmu(); Ownership::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } } }
