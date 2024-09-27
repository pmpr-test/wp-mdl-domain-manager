<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6b04b9e186             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\157\155\141\x69\156\40\115\141\156\x61\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\x61\x6e\x65\x6c")) { goto cwwmimggaaecmucw; } Panel::symcgieuakksimmu(); cwwmimggaaecmucw: if (!$this->omseesogaocascyo("\x63\x6f\x6d\160\x6f\156\145\156\x74\x2d\x6d\141\x6e\141\147\x65\162")) { goto awoaooyoeoyeeqee; } Model::symcgieuakksimmu(); awoaooyoeoyeeqee: } }
