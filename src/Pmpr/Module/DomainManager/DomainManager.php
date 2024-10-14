<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             670d46c248da1             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\104\x6f\x6d\x61\151\x6e\x20\x4d\x61\156\141\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->gimisysaiasieees()) { REST::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\160\x61\156\x65\154")) { Panel::ksyueceqagwomguk(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x63\x6f\155\160\157\x6e\145\x6e\x74\x2d\155\141\x6e\x61\x67\x65\x72")) { Domain::symcgieuakksimmu(); Ownership::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } } }
