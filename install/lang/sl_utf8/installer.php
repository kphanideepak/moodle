<?php
/// Please, do not edit this file manually! It's auto generated from
/// contents stored in your standard lang pack files:
/// (langconfig.php, install.php, moodle.php, admin.php and error.php)
///
/// If you find some missing string in Moodle installation, please,
/// keep us informed using http://moodle.org/bugs Thanks!
///
/// File generated by cvs://contrib/lang2installer/installer_builder
/// using strings defined in stringnames.txt (same dir)

$string['admindirerror'] = 'Določen skrbniški imenik ni pravilen';
$string['admindirname'] = 'Skrbniški imenik';
$string['admindirsetting'] = '    Le redka spletna mesta uporabljajo /admin kot poseben URL za dostop
    do nadzorne plošče ali česa drugega.  Žal je to v sporu s
    standardno lokacijo Moodle skrbniških stran.  To lahko popravite s
    preimenovanjem skrbniškega imenika v vaši namestitvi in vstavljanjem tega
    novega imena tu.  Na primer: <br /> <br /><b>moodleadmin</b><br /> <br />
    To bo popravilo skrbniške povezave za Moodle.';
$string['admindirsettinghead'] = 'Nastavitev skrbniškega imenika ...';
$string['admindirsettingsub'] = '    Le redka spletna mesta uporabljajo /admin kot poseben URL za dostop
    do nadzorne plošče ali česa drugega.  Žal je to v sporu s
    standardno lokacijo Moodle skrbniških stran.  To lahko popravite s
    preimenovanjem skrbniškega imenika v vaši namestitvi in vstavljanjem tega
    novega imena tu.  Na primer: <br /> <br /><b>moodleadmin</b><br /> <br />
    To bo popravilo skrbniške povezave za Moodle.';
$string['availablelangs'] = 'Razpoložljivi jezikovni paketi';
$string['bypassed'] = 'Preskočeno';
$string['cannotcreatelangdir'] = 'Imenika jezika ni možno ustvariti.';
$string['cannotcreatetempdir'] = 'Začasnega imenika ni možno ustvariti.';
$string['cannotdownloadcomponents'] = 'Komponent ni možno prenesti.';
$string['cannotdownloadzipfile'] = 'Datoteke ZIP ni možno prenesti.';
$string['cannotfindcomponent'] = 'Komponente ni možno najti.';
$string['cannotsavemd5file'] = 'Datoteke MD5 ni možno shraniti.';
$string['cannotsavezipfile'] = 'Datoteke ZIP ni možno shraniti.';
$string['cannotunzipfile'] = 'Datoteke ni možno razširiti (unzip).';
$string['caution'] = 'Pozor';
$string['check'] = 'Potrditev';
$string['chooselanguage'] = 'Izberite jezik';
$string['chooselanguagehead'] = 'Izberite jezik';
$string['chooselanguagesub'] = 'Izberite jezika SAMO za namestitev. Pozneje boste lahko izbrali tudi jezike strani in uporabniške jezike.';
$string['closewindow'] = 'Zapri to okno';
$string['compatibilitysettings'] = 'Preverjanje vaših PHP nastavitev ...';
$string['compatibilitysettingshead'] = 'Preverjanje vaših PHP nastavitev ...';
$string['compatibilitysettingssub'] = 'Da bi Moodle pravilno deloval, mora vaš strežnik opraviti vse naslednje preizkuse';
$string['componentisuptodate'] = 'Komponenta je posodobljena.';
$string['configfilenotwritten'] = 'Skripta nameščanja ni mogla samodejno ustvariti datoteke config.php, ki bi vsebovala vaše izbrane nastavitve. Verjetno v Moodle imenik ni možno zapisovanje. Ročno lahko prekopirate sledečo kodo v datoteko z imenom config.php v korenskem imeniku Moodle.';
$string['configfilewritten'] = 'datoteka config.php je bila uspešno ustvarjena';
$string['configurationcomplete'] = 'Konfiguracija je dokončana';
$string['configurationcompletehead'] = 'Konfiguracija je dokončana';
$string['configurationcompletesub'] = 'Moodle je poskušal shraniti vašo konfiguracijo v datoteko v korenu vaše namestitve Moodle.';
$string['continue'] = 'Nadaljuj';
$string['curlrecommended'] = 'Namestitev dodatne cURL knižnice je priporočljivo za omogočanje Moodlovih mrežnih zmogljivosti.';
$string['customcheck'] = 'Ostala preverjanja';
$string['database'] = 'Podatkovna zbirka';
$string['databasecreationsettings'] = '    Zdaj morate konfigurirati nastavitve podatkovne zbirke, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovno zbirko bo samodejno ustvaril namestitveni program
    s spodaj določenimi nastavitvami.<br />
    <br /> <br />
       <b>Vrsta:</b> določeno \"mysql\" s strani namestitvenega programa<br />
       <b>Gostitelj:</b> določeno \"localhost\" s strani namestitvenega programa<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> določeno \"root\" s strani namestitvenega programa<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasecreationsettingshead'] = '    Zdaj morate konfigurirati nastavitve podatkovne zbirke, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovno zbirko bo samodejno ustvaril namestitveni program
    s spodaj določenimi nastavitvami.';
$string['databasecreationsettingssub'] = '<b>Vrsta:</b> določeno \"mysql\" s strani namestitvenega programa<br />
       <b>Gostitelj:</b> določeno \"localhost\" s strani namestitvenega programa<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> določeno \"root\" s strani namestitvenega programa<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasesettings'] = '    Zdaj morate konfigurirati podatkovno zbirko, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovna zbirka mora biti že ustvarjena
    in tudi uporabniško ime in geslo za dostop do nje.<br />
    <br /> <br />
       <b>Vrsta:</b> mysql ali postgres7<br />
       <b>Gostitelj:</b> npr. localhost ali db.isp.com<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> vaše uporabniško ime podatkovne zbirke<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasesettingshead'] = '    Zdaj morate konfigurirati podatkovno zbirko, kjer bo večina Moodle podatkov
    shranjenih.  Ta podatkovna zbirka mora biti že ustvarjena
    in tudi uporabniško ime in geslo za dostop do nje.';
$string['databasesettingssub'] = '<b>Vrsta:</b> mysql ali postgres7<br />
       <b>Gostitelj:</b> npr. localhost ali db.isp.com<br />
       <b>Ime:</b> ime podatkovne zbirke, npr. moodle<br />
       <b>Uporabnik:</b> vaše uporabniško ime podatkovne zbirke<br />
       <b>Geslo:</b> vaše geslo podatkovne zbirke<br />
       <b>Predpona tabel:</b> dodatna predpona za vsa imena tabel';
$string['databasesettingssub_mssql'] = '<b>Tip:</b> SQL*Server (ne UTF-8) <b><font color=\"red\">Testno! (ni za uporabo na produkcijskem strežniku)</font></b><br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingssub_mssql_n'] = '<b>Tip:</b> SQL*Server (UTF-8)<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingssub_mysql'] = '<b>Tip:</b> MySQL<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (opcijsko)';
$string['databasesettingssub_oci8po'] = '<b>Tip:</b> Oracle<br />
<b>Strežnik:</b> ni v uporabi, mora biti prazno<br />
<b>Ime:</b> ime povezave tsanems.ora<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno, največ dva znaka)';
$string['databasesettingssub_odbc_mssql'] = '<b>Tip:</b> SQL*Server (prek ODBC) <b><font color=\"red\">Testno! (ni za uporabo na produkcijskem strežniku)</font></b><br />
<b>Strežnik:</b> ime strežnika, nastavljeno v nadzorni plošči ODBC<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['databasesettingssub_postgres7'] = '<b>Tip:</b> PostgreSQL<br />
<b>Strežnik:</b> denimo localhost ali db.isp.com<br />
<b>Ime:</b> Ime podatkovne zbirke, denimo moodle<br />
<b>Uporabnik:</b> Uporabniško ime na podatkovni zbirki<br />
<b>Geslo:</b> Geslo za dostop do podatkovne zbirke<br />
<b>Predpona imen tabel:</b> Predpona, ki naj jo imajo vse tabele (nujno)';
$string['dataroot'] = 'Imenik za podatke';
$string['datarooterror'] = '&#039;Imenika za podatke&#039;, ki ste ga navedli ni možno najti ali ustvariti.  Bodisi popravite pot ali ustvarite imenik ročno.';
$string['dbconnectionerror'] = 'Povezave ni mogoče vzpostaviti s podatkovno zbirko, ki ste jo navedli. Prosimo, preverite vaše nastavitve podatkovne zbirke.';
$string['dbcreationerror'] = 'Napaka ustvarjanja podatkovne zbirke. S podanimi nastavitvami ni možno ustvariti podatkovne zbirke z navedenim imenom';
$string['dbprefix'] = 'Predpona tabel';
$string['dbwrongencoding'] = 'Izbrana podatkovna zbirka uporablja kodno tabelo, ki ni priporočena ($a). Bolje bi bilo namesto nje uporabiti podatkovno zbirko, ki bi uporabljala Unicode (UTF-8). Kljub temu lahko preskočite ta preizkus z izborom \"Preskoči preizkus kodne tabele podatkovne zbirke\" spodaj, vendar lahko naletite na težave v prihodnje.';
$string['dbwronghostserver'] = 'Slediti morate pravilom nastavitve strežnika, kot so razložena zgoraj.';
$string['dbwrongnlslang'] = 'Okoljska spremenljivka NLS_LANG na vašem spletnem strežniku mora uporabljati kodni nabor AL32UTF8. Za navodila za pravilno nastavitev OCI8 si poglejte dokumentacijo PHP.';
$string['dbwrongprefix'] = 'Slediti morate pravilom za nastavitev predpone tabel, kot so razložena zgoraj.';
$string['directorysettings'] = '<p>Prosimo, potrdite lokacije te namestitve Moodle.</p>

<p><b>Spletni naslov:</b>
Navedite polni spletni naslov za dostop do Moodle.  
Če je vaše spletno mesto dostopno prek večih URL naslovov izberite
najbolj pogostega, ki ga bodo uporabljali udeleženci.  Ne vključite 
zaključne poševnice.</p>

<p><b>Imenik Moodle:</b>
Navedite polno pot imenika do te namestitve
Pazite, da bodo pravilne velike in male črke.</p>

<p><b>Imenik za podatke:</b>
Potrebujete prostor kamor lahko Moodle shranjuje naložene datoteke.  Ta
imenik mora omogočati branje IN PISANJE za uporabniško ime spletnega strežnika
(običajno &#039;nobody&#039; ali &#039;apache&#039;), a ne sme biti dostopen
neposredno prek spleta.</p>';
$string['directorysettingshead'] = 'Potrdite lokacije te namestitve Moodle';
$string['directorysettingssub'] = '<b>Spletni naslov:</b>
Navedite polni spletni naslov za dostop do Moodle.  
Če je vaše spletno mesto dostopno prek večih URL naslovov izberite
najbolj pogostega, ki ga bodo uporabljali udeleženci.  Ne vključite 
zaključne poševnice.
<br />
<br />
<b>Imenik Moodle:</b>
Navedite polno pot imenika do te namestitve
Pazite, da bodo pravilne velike in male črke.
<br />
<br />
<b>Podatkovni imenik:</b>
Potrebujete prostor kamor lahko Moodle shranjuje naložene datoteke.  Ta
imenik mora omogočati branje IN PISANJE za uporabniško ime spletnega strežnika
(običajno &#039;nobody&#039; ali &#039;apache&#039;), a ne sme biti dostopen
neposredno prek spleta.';
$string['dirroot'] = 'Imenik Moodle';
$string['dirrooterror'] = 'Nastavitev &#039;Imenik Moodle&#039; je kot kaže napačna - tam ni najti namestitve Moodle. Spodnja vrednost je bila ponovno nastavljena.';
$string['download'] = 'Prenos';
$string['downloadedfilecheckfailed'] = 'Preverjanje prenešene datoteke ni uspelo.';
$string['downloadlanguagebutton'] = 'Prenesite jezikovni paket &quot;$a&quot;';
$string['downloadlanguagehead'] = 'Prenos jezikovnega paketa';
$string['downloadlanguagenotneeded'] = 'Nadaljujete lahko postopek namestitve z uporabo privzetega jezikovnega paketa, \"$a\".';
$string['downloadlanguagesub'] = 'Zdaj imate možnost prenosa jezikovnega paketa in nadaljevanja s postopkom namestitve v tem jeziku.<br /><br />Če ne morete prenesti jezikovnega paketa, se bo namestitveni postopek nadaljeval v angleščini. (Ko bo namestitveni postopek zaključen, boste imeli možnost prenosa in namestitve dodatnih jezikovnih paketov.)';
$string['doyouagree'] = 'Ste prebrali te pogoje in jih razumeli?';
$string['environmenterrortodo'] = 'Pred nadaljevanjem namestitve te različice Moodle morate razrešiti zgoraj odkrite težave okolja (napake).';
$string['environmenthead'] = 'Preverjanje vašega okolja ...';
$string['environmentrecommendcustomcheck'] = 'Neopravljen test kaže na možne težave.';
$string['environmentrecommendinstall'] = 'za najboljši rezultat je priporočena, da je nameščeno in omogočeno';
$string['environmentrecommendversion'] = 'različica $a->needed je priporočena, vi uporabljate $a->current';
$string['environmentrequirecustomcheck'] = 'ta test mora biti opravljen';
$string['environmentrequireinstall'] = 'mora biti nameščeno in omogočeno';
$string['environmentrequireversion'] = 'različica $a->needed je zahtevana, vi uporabljate $a->current';
$string['environmentsub'] = 'Preverjamo, če razne komponente vašega sistema ustrezajo sistemskim zahtevam';
$string['environmentxmlerror'] = 'Napaka pri branju podatkov okolja ($a->error_code)';
$string['error'] = 'Napaka';
$string['fail'] = 'Neuspeh';
$string['fileuploads'] = 'Nalaganje datotek';
$string['fileuploadserror'] = 'To bi moralo biti vključeno';
$string['fileuploadshelp'] = '<p>Nalaganje datotek je kot kaže onemogočeno na vašem strežniku.</p>

<p>Moodle je še vedno možno namestiti, vendar brez te možnosti, ne boste mogli 
   nalagati datotek predmetov ali novih slik uporabniških profilov.</p>

<š>Za omogočanje nalaganja datotek boste (ali vaš skrbnik sistema) morali 
   urediti glavno datoteko php.ini na vašem sistemu in spremeniti nastavitev za 
   <b>file_uploads</b> na &#039;1&#039;.</p>';
$string['gdversion'] = 'GD različica';
$string['gdversionerror'] = 'Knjižnica GD mora biti prisotno za obdelavo in ustvarjanje slik';
$string['gdversionhelp'] = '<p>Na vašem strežniku kot kaže ni nameščen GD.</p>

<p>GD je knjižnica, ki jo potrebuje PHP, da lahko Moodle obdeluje slike 
   (kot so ikone uporabniškega profila) in ustvarja nove slike (kot so 
   grafi dnevnikov).  Moodle bo deloval tudi brez GD - te možnosti 
   vam preprosto ne bodo na voljo.</p>

<p>Za dodajanje GD v PHP v sistemu Unix, prevedite PHP s parametrom --with-gd.</p>

<p>V okolju Windows lahko običajno uredite php.ini in odkomentirate vrstico, ki se sklicuje na php_gd2.dll.</p>';
$string['globalsquotes'] = 'Nevarna obravnava globalnih spremenljivk';
$string['globalsquoteserror'] = 'Popravite vaše PHP nastavitve: onemogočite register_globals in / ali omogočite magic_quotes_gpc';
$string['globalsquoteshelp'] = '<p>Kombinacija hkrati onemogočenega Magic Quotes GPC in omogočenega Register Globals ni priporočena.</p>

<p>Priporočena nastavitev je <b>magic_quotes_gpc = On</b> in <b>register_globals = Off</b> v vaši datoteki php.ini</p>

<p>Če nimate dostopa do datoteke php.ini, boste morda lahko vstavili sledečo vrstico v datoteko 
   imenovano .htaccess v vašem imeniku Moodle:
   <blockquote>php_value magic_quotes_gpc On</blockquote>
   <blockquote>php_value register_globals Off</blockquote>
</p>   
   ';
$string['globalswarning'] = '<p><strong>Varnostno opozorilo</strong>: za pravilno delovanje moodle zahteva spremembo nastavitev PHP. Nastavite set register_globals=off v php.ini, konfiguracijski datoteki za Apache/IIS ali v .htaccess';
$string['help'] = 'Pomoč';
$string['iconvrecommended'] = 'Namestitev dodatne knjižnice ICONV je zelo priporočljiva za izboljšanje zmogljivosti strani, še posebej, če stran uporablja dodatne jezike.';
$string['info'] = 'Informacije';
$string['installation'] = 'Namestitev';
$string['invalidemail'] = 'Neveljaven e-poštni naslov';
$string['invalidmd5'] = 'Neveljaven MD5';
$string['invalidurl'] = 'URL ne obstaja';
$string['langdownloaderror'] = 'Žal jezik \"$a\" ni bil nameščen. Postopek namestitve se bo nadaljeval v angleščini.';
$string['langdownloadok'] = 'Jezik \"$a\" je bil uspešno nameščen. Postopek namestitve se bo nadaljeval v tem jeziku.';
$string['language'] = 'Jezik';
$string['magicquotesruntime'] = 'Magic Quotes Run Time';
$string['magicquotesruntimeerror'] = 'To bi moralo biti izključeno';
$string['magicquotesruntimehelp'] = '<p>Možnost Magic quotes runtime bi morala biti izključena za pravilno delovanje Moodle.</p>

<p>Po navadi je privzeta vrednost izključena ... poglejte nastavitev <b>magic_quotes_runtime</b> v vaši datoteki php.ini.</p>

<p>Če nimate dostopa do datoteke php.ini, boste morda lahko vstavili sledečo vrstico v datoteko 
   imenovano .htaccess v vašem imeniku Moodle:
   <blockquote>php_value magic_quotes_runtime Off</blockquote>
</p>   
   ';
$string['mbstringrecommended'] = 'Namestitev dodatne knjižnice MBSTRING je zelo priporočljiva za izboljšanje zmogljivosti strani, še posebej, če stran uporablja dodatne jezike.';
$string['memorylimit'] = 'Omejitev pomnilnika';
$string['memorylimiterror'] = 'Omejitev pomnilnika PHP je nastavljena precej nizko ... pozneje lahko pride do težav.';
$string['memorylimithelp'] = '<p>Omejitev pomnilnika PHP je trenutno na vašem strežniku nastavljena na $a.</p>

<p>To lahko povzroči, da bo imel Moodle pozneje težave s pomnilnikom. Še posebej,
   če imate vključenih veliko modulov oziroma veliko uporabnikov.</p>

<p>Priporočamo, da konfigurirate PHP z višjo omejitvijo, če je možno npr. 40M.  
   To lahko poskusite storiti na več načinov:</p>
<ol>
<li>Če lahko, ponovno prevedite PHP z <i>--enable-memory-limit</i>.  
    To bo omogočilo, da bo Moodle sam nastavil omejitev pomnilnik zase.</li>
<li>Če imate dostop do vaše datoteke php.ini, lahko spremenite vrednost <b>memory_limit</b> 
    v tej datoteki na, recimo, 40M.  Če nimate dostopa, boste morda 
    lahko prosili vašega skrbnika, da to naredi za vas.</li>
<li>Na nekaterih strežnikih PHP lahko ustvarite datoteko .htaccess v imeniku Moodle, 
    ki naj vsebuje to vrstico:
    <p><blockquote>php_value memory_limit 40M</blockquote></p>
    <p>Vendar lahko to prepreči delovanje <b>vseh</b> PHP strani 
    (ob prikazu strani boste videli napake) in boste morali odstraniti datoteko .htaccess.</p></li>
</ol>';
$string['missingrequiredfield'] = 'Eno izmed zahtevanih polj manjka';
$string['moodledocslink'] = 'Moodle dokumentacija za to stran';
$string['mssql'] = 'MS SQL (mssql)';
$string['mssqlextensionisnotpresentinphp'] = 'Nastavitev MSSQL v PHP je napačna, zato ne more komunicirati z MSSQL strežnikom. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['mssql_n'] = 'Strežnik SQL s podporo UTF-8 (mssql_n)';
$string['mysql'] = 'MySQL (mysql)';
$string['mysql416bypassed'] = 'Če vaša stran uporablja SAMO jezike v kodni tabeli ISO-8859-1, lahko nadaljujete z uporabo trenutno nameščene različice MySQL 4.1.12 (ali višje).';
$string['mysql416required'] = 'MySQL 4.1.16 je najnižja zahtevana različica za Moodle 1.6 z jamstvom, da bodo lahko vsi podatki pretvorjeni v UTF-8 v prihodnje.';
$string['mysqlextensionisnotpresentinphp'] = 'PHP ni bil pravilno konfiguriran z razširitvijo MySQL in zato ne more komunicirati z MySQL.  Prosimo, preverite vašo datoteko php.ini ali ponovno prevedite PHP.';
$string['name'] = 'Ime';
$string['next'] = 'Naslednje';
$string['oci8po'] = 'Oracle (oci8po)';
$string['ociextensionisnotpresentinphp'] = 'Nastavitev OCI8 v PHP je napačna, zato ne more komunicirati s strežnikom Oracle. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['odbcextensionisnotpresentinphp'] = 'Nastavitev ODBC v PHP je napačna, zato ne more komunicirati z MS SQL strežnikom prek ODBC. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['odbc_mssql'] = 'MS SQL prek ODBC (odbc_mssql)';
$string['ok'] = 'V redu';
$string['opensslrecommended'] = 'Inštaliranje opcijske OpenSSl knjižnjice je zelo priporočljivo --to omogoča Moodle mrežne zmogljivosti.';
$string['pass'] = 'Uspešno';
$string['password'] = 'Geslo';
$string['pgsqlextensionisnotpresentinphp'] = 'Nastavitev PGSQL v PHP je napačna, zato ne more komunicirati s strežnikom PostgreSQL. Prosimo, preverite datoteko php.ini ali ponovno prevedite PHP.';
$string['php50restricted'] = 'PHP 5.0.x ima vrsto znanih težav, posodobite na 5.1.x ali namestite starejšo različico 4.3.x ali 4.4.x';
$string['phpversion'] = 'Različica PHP';
$string['phpversionerror'] = 'Različica PHP mora biti vsaj 4.3.0 ali 5.1.0 (5.0.x ima vrsto znanih težav).';
$string['phpversionhelp'] = '<p>Moodle zahteva različico PHP vsaj 4.3.0 ali 5.1.0 (5.0.x ima vrsto znanih težav).</p>
<p>Vaša trenutna različica je $a</p>
<p>Posodobiti in nadgraditi morate PHP ali premakniti program na strežnik s novejšo različico PHP!<br />
(V primeru različice 5.0.x lahko namestite tudi različico 4.4.x)</p>';
$string['postgres7'] = 'PostgreSQL (postgres7)';
$string['previous'] = 'Prejšnje';
$string['qtyperqpwillberemoved'] = 'Med nadgradnjo bo RQP tip vprašanja odstranjen. Tega tipa vprašanja niste uporabljali, tako da ne bi smelo priti do težav.';
$string['qtyperqpwillberemovedanyway'] = 'Med nadgradnjo bo RQP tip vprašanja odstranjen. V bazi podatkov imate nekaj vprašanj tega tipa. Le-ta bodo nehala delovati, razen če pred nadaljevanjem nadgradnje ponovno naložite kodo iz http://moodle.org/mod/data/view.php?d=13&amp;rid=797';
$string['releasenoteslink'] = 'Za informacije o tej različici Moodle si oglejte spletne <a target=\"_new\" href=\"$a\">Opombe o različici</a>';
$string['remotedownloaderror'] = 'Prenos komponent na vaš strežnik ni uspel, prosim preverite proxy nastavitve. PHP cURL končnice so zelo priporočljive. <br /><br /> Datoteke <a href=\"$a->url\">$a->url</a> morate prenesti ročno in jih kopirati v \"$a->dest\" na vašem strežniku, tam pa estrahirati ZIP datoteke.';
$string['remotedownloadnotallowed'] = 'Nalaganje komponent na vaš strežnik ni dovoljeno (allow_url_fopen je onemogočen).<br /><br />Ročno morate prenesti datoteko <a href=\"$a->url\">$a->url</a>, jo kopirati v imenik \"$a->dest\" na vašem strežniku in jo tam razširiti (unzip).';
$string['report'] = 'Poročilo';
$string['restricted'] = 'Omejeno';
$string['safemode'] = 'Varni način';
$string['safemodeerror'] = 'Moodle lahko ima težave z vključenim varnim načinom';
$string['safemodehelp'] = '<p>Moodle ima lahko razne težave z vključenim varnim načinom. Ne samo, da
   verjetno ne bo smel ustvarjati novih datotek.</p>
   
<p>Varni način je običajno vključen pri paranoidnih javnih spletnih gostiteljih in boste morda morali
   poiskati novo podjetje za gostovanje vašega Moodle spletnega mesta.</p>
   
<p>Če želite lahko poskusite nadaljevati z namestitvijo, a pričakujte nekaj težav pozneje.</p>';
$string['serverchecks'] = 'Preverjanje strežnika';
$string['sessionautostart'] = 'Samodejni začetek seje';
$string['sessionautostarterror'] = 'To bi moralo biti izključeno';
$string['sessionautostarthelp'] = '<p>Moodle zahteva podporo za seje in ne bo deloval brez tega.</p>

<p>Seje lahko omogočite v datoteki php.ini ... poiščite parameter session.auto_start.</p>';
$string['skipdbencodingtest'] = 'Preskoči preizkus kodne tabele podatkovne zbirke';
$string['status'] = 'Status';
$string['thischarset'] = 'UTF-8';
$string['thisdirection'] = 'ltr';
$string['thislanguage'] = 'Sloven&#353;&#269;ina';
$string['unicoderecommended'] = 'Priporočeno je shranjevanje vaših podatkov v Unicode (UTF-8). Baze podatkov, v katere nameščamo nove namestitev, morajo imeti svoj privzet nabor znakov nastavljen na Unicode. Če nadgrajujete je priporočljivo izvesti UTF-8 migracijski proces (glej Skrbnikove stani).';
$string['unicoderequired'] = 'Podatke je potrebno shranjevati v Unicode obliki (UTF-8). Baze podatkov, v katere nameščamo nove namestitev, morajo imeti svoj privzet nabor znakov nastavljen na Unicode. Če nadgrajujete je priporočljivo izvesti UTF-8 migracijski proces (glej Skrbnikove stani).';
$string['user'] = 'Uporabnik';
$string['welcomep10'] = '$a->installername ($a->installerversion)';
$string['welcomep20'] = 'To stran vidite, ker ste uspešno namestili in 
    zagnali paket <strong>$a->packname $a->packversion</strong> na vašem računalniku. Čestitamo!';
$string['welcomep30'] = 'Ta različica <strong>$a->installername</strong> vključuje aplikacije 
    za ustvarjanje okolja v katerem bo deloval <strong>Moodle</strong> in sicer:';
$string['welcomep40'] = 'Ta paket vključuje tudi <strong>Moodle $a->moodlerelease ($a->moodleversion)</strong>.';
$string['welcomep50'] = 'Uporabo vseh aplikacij v tem paketu določajo njihove ustrezne 
    licence. Celoten paket <strong>$a->installername</strong> je 
    <a href=\"http://www.opensource.org/docs/definition_plain.html\">odprta koda</a> in se razširja 
    pod licenco <a href=\"http://www.gnu.org/copyleft/gpl.html\">GPL</a>.';
$string['welcomep60'] = 'Naslednje strani vas bodo popeljale skozi nekaj enostavno sledljivih korakov za 
    konfiguracijo in nastavitev <strong>Moodle</strong>  na vašem računalniku. Sprejmete lahko privzete 
    nastavitve ali jih, če tako želite, spremenite, da bodo ustrezale vašim potrebam.';
$string['welcomep70'] = 'Kliknite spodnji gumb \"Naprej\" za nadaljevanje nastavitve <strong>Moodle</strong>.';
$string['wrongdestpath'] = 'Napačna ciljna pot.';
$string['wrongsourcebase'] = 'Napačna osnova URL vira.';
$string['wrongzipfilename'] = 'Napačno ime datoteke ZIP.';
$string['wwwroot'] = 'Spletni naslov';
$string['wwwrooterror'] = 'Spletni naslov kot kaže ni veljaven - te namestitve Moodle, kot kaže, ni tam. Spodnja vrednost je bila ponovno nastavljena.';
$string['xmlrpcrecommended'] = 'Namestitev dodatnega xmlrpc podaljška je koristna za mrežne funkcije Moodla.';
?>