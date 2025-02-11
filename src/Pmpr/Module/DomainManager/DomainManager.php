<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             67abce8c73c0c             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Domain; use Pmpr\Module\DomainManager\Model\Ownership; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\157\155\141\x69\156\x20\x4d\x61\156\141\147\145\x72", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { if ($this->caokeucsksukesyo()->owicscwgeuqcqaig()->gimisysaiasieees()) { REST::symcgieuakksimmu(); } } public function aqyikqugcomoqqqi() { $qgiimcueymgqcsai = $this->caokeucsksukesyo()->cqusmgskowmesgcg(); if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\160\141\156\145\x6c")) { Panel::ksyueceqagwomguk(); } if ($qgiimcueymgqcsai->iqqgmieeqemiowuk("\x63\x6f\x6d\160\x6f\156\145\x6e\x74\x2d\155\141\156\x61\147\145\x72")) { Domain::symcgieuakksimmu(); Ownership::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } } }
