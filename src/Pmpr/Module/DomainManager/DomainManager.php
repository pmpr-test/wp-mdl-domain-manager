<?php
/*   _______________________________________
    |  Obfuscated by PMPR - Php Obfuscator  |
    |             66f6afccea9ab             |
    |_______________________________________|
*/
 namespace Pmpr\Module\DomainManager; use Pmpr\Common\Foundation\Container\ComponentInitiator; use Pmpr\Common\Foundation\Interfaces\Constants; use Pmpr\Module\DomainManager\Backlink\Backlink; use Pmpr\Module\DomainManager\Model\Model; use Pmpr\Module\DomainManager\Panel\Panel; use Pmpr\Module\DomainManager\REST\REST; class DomainManager extends ComponentInitiator { public function register() { $this->gkieogwukagigisy(__DIR__, [Constants::qescuiwgsyuikume => static function () { return __("\x44\157\155\x61\151\x6e\x20\x4d\141\156\141\147\145\162", PR__MDL__DOMAIN_MANAGER); }]); } public function mameiwsayuyquoeq() { REST::symcgieuakksimmu(); Backlink::symcgieuakksimmu(); } public function aqyikqugcomoqqqi() { if (!$this->omseesogaocascyo("\160\141\x6e\145\154")) { goto cwwmimggaaecmucw; } Panel::symcgieuakksimmu(); cwwmimggaaecmucw: if (!$this->omseesogaocascyo("\143\x6f\155\160\x6f\x6e\x65\156\164\55\x6d\141\156\x61\147\x65\162")) { goto awoaooyoeoyeeqee; } Model::symcgieuakksimmu(); awoaooyoeoyeeqee: } }
