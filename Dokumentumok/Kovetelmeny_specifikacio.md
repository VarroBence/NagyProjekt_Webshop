# Követelmény Specifikáció

## 1. Áttekintés
Az oldal célja egy Webshop, amelyen a felhasználó tud regiszrálni, bejelentkezni. Különböző jogköröket tud kezelni. A felhasználó tudja követni a rendelését, tud termékeket hozzáadni a rendeléséhez, törölni és módosítani is. A weboldal egy számítógép álal elérhető webes felület, telefonnal és más eszközökkel nem elérhető.
A felhasználó tud válogatni pólók között, amiket megtud vásárolni. Kitudja választani a méretet, színt, darabszámot. Ha végzett a rendelés összeválogatásával, akkor letudja adni a rendelését egy gomb segítségével. A rendelés leadásakor a felhasználó kitudja választani, a fizetési módot, szállíási módot, és a szállítási címet megtudja adni. A rendelés leadásakor az oldal tájékoztatja a felhasználót a sikeres rendeléséről. A rendelés leadása után nyomontudja követni a rendelését, amit módosítani, esetleg törölni is tud.

## 2. Jelenlegi helyzet
A megrendelő még nem rendelkezik webshoppal, így minket kért fel, hogy készítsünk a termékeinek egy olyan oldalt, ahol értékesíteni tudja őket. Ezáltal több vásárló ismerheti meg a termékeit, mivel a mai digitális világban így sokkal egyszerűbben jutnak hozzá a termékekhez a vásárlók, valamint kényelmesebben tudnak az emberek vásárolni.

## 3. Vágyálom rendszer
A projekt célja egy olyan webshop amely az online vásárlás lehetőségét biztosítja a vásárlók számára. A rendszer egy platformon, weben érhető el. Ha felhasználó nem regisztrál, akkor csak böngészni tud, regisztráció után tudja kezelni a kosarát, rendelést is tud leadni. A rendszer követi a felhasználó előző vásárlásait is, fizetési módjait, szállítási címeit, a visszatérő vásárlók felhazsnálói élménye érdekében. Adminisztrációs jogokkal bejelentkezve, a felületen keresztül módosításokat lehet végezni a termékekkel kapcsolatban: hozzáadni és törölni termékeket, azok tulajdonságait, adatait módosítani.

## 4. Jelenlegi üzleti folyamatok modellje
A jelenlegi rendszer megkívánja, hogy a vásárlók személyesen menjenek be a boltba és ott vegyék meg a pólókat. Nincs lehetőség házhoz szállításra vagy akár utánvételre, így körülményes az megvásárlás a vásárlók számára. A boltban dolgozók papír alapon követik nyomon, hogy melyik áruból mennyi, milyen méret és szín van raktáron. Nincsen adatbázis, amelyben egyszerűbben átlátható lenne a raktáron lévő áruk összessége. Mivel papír alapon jegyzik fel a raktárban lévő árukat, így sokkal időigényesebb és körülményesebb a raktár feltöltése és ellenőrzése.

## 5. Igényelt üzleti folyamatok modellje
A mai világban minden kereskedő a profit növelésére törekszik, aminek az egyik módja a vásárlóbázis növelése. Sok ember számra felesleges időt és energiát jelent elmenni egy üzletbe személyesen vásárolni, számukra sokkal kényelmesebb, ha azt az otthon kényelméből egy weboldalon elintézheti sokkal kevesebb idő alatt, anélkül hogy kikéne mozdulni a lakásból. A webshop erre kínál egy lehetőséget. A megrendelő azt szeretné, hogy a főoldalon alapból láthatóak legyenek a termékek. A jobb felső sarokban két gomb segítségével be tud jelentkezni, vagy regisztrálni tud a felhasználó egy másik oldalra való átirányítás után. A bejelentkezést követően lehetőséget kell adniszerepkörtől függően az oldal funkcióihoz. A termékeket az admin tudja módosítani valmaint törölni az oldalon.
![Igényelt üzleti folyamatok modellje](https://user-images.githubusercontent.com/78543866/198306189-7f86ad36-e210-486e-a9eb-1348df27cd96.png)

## 6. Követelmény lista

| Id | Modul | Név | Leírás |
| :---: | --- | --- | --- |
| K1 | Jogosultság | Bejelentkezési felület |A felhasználó az email címe és a jelszava segítségével bejelentkezhet.Ha a megadott email cím vagy jelszó nem megfelelő, akkor a felhasználó hibaüzenetet kap.|
| K2| Jogosultság |Regisztráció| A felhasználó a felhasználói nevének, email címének és jelszavának megadásával regisztrálja magát. A jelszó tárolása kódolva történik az adatbázisban. Ha valamelyik adat ezek közül hiányzik vagy nem felel meg a követelményeknek, akkor a rendszer értesíti erről a felhasználót. |
| K3| Jogosultság | Jogosultsági szintek| - Admin: Rendszerhozzáférés, pólók feltöltése, CRUD műveletek végzése a termékeken <br> - User: termékek hozzáadása a személyes kosárhoz, rendelés leadás, termék törlése a kosárból|
| K4 | Felület | Regisztráció | A felhasználók itt tudnak regisztrálni a rendszerhez |
| K5 | Felület | Bejelentkezés | A felhasználók itt tudnak bejelentkezni a weboldalra |
| K6 | Felület | Főoldal| A weboldal main paige oldala  |
| K7 | Felület | Regisztráció / Belépés | A main paige jobb felső sarkában található meg az oda vezető gombok|
| K8 | Felület | Kosár|  A main paige jobb felső sarkában található meg az oda vezető gomb |
| K9 | Felület | Termékek elhelyezése | A fő oldalon találhatók középen, ahol a vásárló hozzá tudja adni őket a kosarához |
| K10 | Jogosultság | Admin felület | Adminfelület, amivel módosítani lehet a termékeket|

## 7. Fogalomtár
Main page - Ez az az oldal, amelyet legelőször jelenik meg a felhasználó számára. Itt jelennek meg a megásárolható termékek.

CRUD műveletek - Azok a műveletek, amelyek az adatbázis kezeléshez szükségesek. Ilyen művelet az: adatbázisból adatok olvasása, adabázisba adatok feltöltése, ott lévő adat törlése, vagy módosíása.
