# Rendszerterv

## 1. A rendszer célja
A rendszer célja ruha rendelések internetes felvétele. A felhasználó egy könnyen átlátható felületen navigálhat, ahol megjelennek az eladásra szánt termékek. A Megtekintheti a temékek tulajdonságait részletesebben is, valamint kosárba helyezhet termékeket. A kosárban módosíthatja rendelését, majd egy gomb segítségével le is adhatja. A bejelentkezett felhasználók láthatják rendelési előzmélnyeiket is. Admin szerepkörrel új termékek vehetőek fel az adatbázisba, valamint ezeket törölni is tudja. A rendszer webes felületen érhető el, nincs más célplatform.

## 2. Projektterv
### 2.1 Projektszerepkörök, felelősségek:
Product owner: Bagoly Gábor

Scrum masters: Kecse Károly

### 2.2 Projektmunkások és felelősségek:
Design: Iván Ákos. Tóth Tamás, Varró Bence

Developer: Iván Ákos. Tóth Tamás, Varró Bence

Tesztelő: Iván Ákos. Tóth Tamás, Varró Bence

### 2.3 Ütemterv:
![image](https://user-images.githubusercontent.com/103049058/199763064-5829f004-9d7b-4a69-95ff-584da699eca1.png)

## 3. Üzleti folyamatok modellje
![Untitled](https://user-images.githubusercontent.com/78543866/199767167-20d6600e-c66a-470c-9811-53f201a659bf.png)


## 4. Követelmények
#### Funkcionális követelmények:
- Felhasználók adatainak tárolása
- Felhasználók csoportokba szervezése
- Rendelések tárolása
- Webes környezeten való működés
#### Nem funkcionális követelmények:
- A felhasználók nem férhetnek hozzá egymás rendeléseihez és adataihoz, kivéve ha admin szerepkörrel rendelkeznek.
- Rendelések követése, rendelés előzmények megjelenítése a fehasználóknak

## 5. Funkcionális terv
### 5.1 Rendszerszereplők:
Felhasználó
Admin
Vendég

### 5.2  Rendszerhasználati esetek és lefutásaik:
Admin
- Beléphet bármilyen szereplőként teljes hozzáférése van a rendszerhez
- Termékek hozzáadása a rendszerhez
- Termékek módosítása
- Termékek törlése

Felhasználó 
- Képes termékeket a kosarához adni
- Képes rendelést leadni
- A regisztráció során rögzített címre kézbesítik a termékeket

Vendég
- Képes termékeket a kosarához adni
- Képes rendelést leadni
- A rendelésnél meg kell adnia a szállítási címet

### 5.3 Menühierarchiák:
Main page:
- Termékek kilistázása
- Kosár ikonja
- Regisztráció/bejelentkezés fül
- Kijelentkezés

Kosár felület:
- Hozzáadott termékek mennyiségének és méretének beállítása
- Rendelés szerkesztése
- Rendelés leadása

Rendelés leadása utáni felület:
- Szállítással kapcsolatos személyes adatok megadása

## 6. Fizikai környezet
Az alkalmazás egy olyan webes felületen készült, amely Laravel keretrendszeren fut, illetve a hordozhatóság végett a reszponzibilitás Bootstrap-el van megoldva.

Nincsenek megvásárolt komponenseink.

Fejlesztői eszközök: Visual Studio Code, XAMMP, PHP myadmin, PHPStorm, Photoshop

## 7. Architecturális terv
Front-end:

Back-end:

## 8. Implementációs terv
A webes felület főként Php nyelven íródott minimális JavaScript alkalmazásával és Laravel keretrendszerrel. Ezeket a technológiákat amennyire csak lehet külön fájlokba írva készítjük, és úgy fogjuk egymáshoz csatolni a jobb átláthatóság, könnyebb változtathatóság, és könnyebb bővítés érdekében. Az oldalakat és azokat vezérlő fájlokat a keretrendszer által biztosított lehetőségekkel különítettük el.

## 9. Adatbázis terv
![Database model](https://user-images.githubusercontent.com/78543866/200951605-d42866a9-b183-49b5-b369-12b6507b116b.png)

## 10. Teszt terv
Tesztelendő Windows rendszerek: Windows 10, vagy újabbak.

Tesztelendő kijelző méretek: 1280x720 (minimum), 1366x768, 1920x1080.

A tesztelés időtartama egy hét.

Tesztelendő funkciók:

User:

A felhasználó bejelentkezés nélkül böngészheti az árukat az oldalon.

A felhasználó képes regisztrálni és utána bejelentkezni.

Regisztráció során nem képes már létező névvel/jelszóval regisztrálni egy új fiókot a felhasználó.

Bejelentkezés után meg tudja nézni a felhasználó a kosarát és módosítani/törölni az abba betett árukat.

A kosárban le tudja adni a rendelését a felhasználó, majd meg tudja adni a postázási adatait.

Admin:

Képes új árukat felvenni az oldalra, valamint törölni is tud árut.

## 11. Telepítési terv

Keressen rá a webshop nevére az interneten és kattintson a linkre.

## 12. Karbantartási terv

A weboldal folyamatos üzemeltetése és karbantartása, mely magában foglalja a belső igények változása miatti módosításokat és a környezeti feltételek változása miatt megfogalmazott program-, illetve állomány módosítási igényeket. Ellenőrizni kell, hogy a jövőben kiadott Windows és böngésző verziókkal kompatibilis-e a weboldal. Idő elteltével új opciókat kell hozzáadni a felülethez, hogy fent tartsuk az érdeklődési szintet.
