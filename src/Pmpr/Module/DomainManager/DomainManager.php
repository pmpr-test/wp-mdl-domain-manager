<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66eae89699c00             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\157\x6d\x61\x69\x6e\40\x4d\x61\156\141\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\x65\x6c")) { goto iqcogmsguwoikame; } Panel::symcgieuakksimmu(); iqcogmsguwoikame: if (!$this->omseesogaocascyo("\143\157\x6d\x70\157\x6e\x65\x6e\164\x2d\x6d\141\156\x61\x67\x65\x72")) { goto gimmuoqwckiseaik; } Model::symcgieuakksimmu(); gimmuoqwckiseaik: } }
