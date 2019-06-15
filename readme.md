# EELK siseveeb

Lõputöö siseveebi osa loodud Laravel 5.8.3 raamistikule.

## Peamised vahendid off-line keskkonnas toimimiseks

1. Composer - https://getcomposer.org
2. git clone https://rainkytt@bitbucket.org/rainkytt/siseveeb.git
3. php arisan serve

## Ülesseadmine on-line keskkonda

1. Kasuta oma teenusepakkuja cPanel-it, meie kasutame Tartu KHK oma;
2. vali „MySQL Database Wizard“;
3. nimeta oma andmebaas, meil on „siseveeb“ ning nii saame nimeks „knriktkh_siseveeb“;
4. järgmiseks loome kasutaja „xxx“ ja salasõnaks „xxx_zzz“, nii saame kasutajaks „knriktkh_xxx“ ja valime sellele kasutajale kõik õigused;
5. nüüd peame tooma oma andmetabelid off-line keskkonnast on-line keskkonda;
6. off-line andmebaas „siseveeb“ kustuta kasutajatest ja postitustest ning cPanelis olles vali andmebaas „siseveeb“ ja tegevuseks „export“ ja vajuta „go“. Nii saad omale faili „siseveeb.sql“ alla laadimiseks;
7. nüüd mine tagasi on-line keskkonda cPanel-sse ja vali „phpMyAdmin“;
8. sealt vali oma andmebaas, meil oli „siseveeb“ ja siis vajuta „import“, sealt „choose file“ ning lae ülesse oma fail „siseveeb.sql“ ja vajuta „Go“;
9. ülejäänud failide üles laadimiseks kasutame programmi nimega „FileZilla“;
10. loo uus kataloog „siseveeb“ ja kopeeri sinna kõik failid ja kataloogid, v.a „public“ kataloog (samuti pole vaja kataloogi „node_modules“);
11. nüüd mine kataloogi „public_html“ ja sinna kopeeri oma „public“ kataloogi sisu;
12. kataloogis „public_html“ tuleb muuta faili „index.php“ kaks rida:  
    Originaal: `require **DIR**.'/../vendor/autoload.php';`  
    Muuda selliseks: `$app = require_once __DIR__.'/../bootstrap/app.php';`  
    Originaal: `require __DIR__.'/../siseveeb/vendor/autoload.php';`  
    Muuda selliseks: `$app = require_once **DIR**.'/../siseveeb/bootstrap/app.php';`
13. nüüd mine on-line kataloogi „siseveeb“ ja muuda faili „.env“ sisu loodud on-line andmebaasi, kasutaja ja parooliga:

```
    DB_DATABASE=knriktkh_siseveeb
    DB_USERNAME=knriktkh_xxx
    DB_PASSWORD=xxx_zzz
```

## Autor

-   **Rain Kütt**

## Litsents

This project is licensed under the MIT License.
