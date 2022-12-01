# Funkcionális Specifikáció

## 1. Áttekintés
Egy olyan weboldalt fejleszünk, ami a megrendelő által árult pólók online megvásárlását segíti elő. Lehetősége lesz minden felhasználónak böngészni az árukat, attól függetlenül, hogy regiszráltak-e vagy be vannak-e jelentkezve. Rendelést leadni és azokat követni/törölni csak az a felhasználó tud, aki regisztrált és be van jelentkezve a fiókjába. Az adminként bejelentkezett felhasználó tudja törölni és módosítani az oldalon megjelenő árukat.


## 2. Jelenlegi helyzet
A megrendelő szeretné megnövelni a bevételét oly módon, hogy online is rendeléseket fogad, illetve azokat kiszállítja. Egy új weboldal előállítását rendelte meg, ahol rendeléseket lehet leadni online formában is.  Ezen keresztül tudják a vásárlók kiválasztani, hogy mit szeretnének rendelni. Számos létező alkalmazást nézett meg a megrendelő, viszont egyik sem illett a cég profiljához, így amellett döntött, hogy egy teljesen új alkalmazás megrendelése miatt hozzánk fordul.

## 3. Jelenlegi üzleti folyamatok modellje
A mai világban, már a legtöbb cég rendelkezik online felülettel, ahol elérhetik a vásárlók a termékeiket. Sokkal kényelmesebbé és probléma mentesebbé teszi a vásárlást, valamit könnyebben elérhetőbbé teszi egyes termékek megvásárlását.


## 4. Igényelt üzleti folyamatok modellje
Azért hogy egyszerűbbé tegyük a vásárlók és eladók közötti interakciót, létrehozunk egy alkalmazást, ami a mai kornak megfelelően helyt tud állni az elektronikai világban. Az eladóknak egyszerűbb lesz nagyobb tömeget kiszolgálnia a rendelésekkel, így időt és munkaerőt takaríthat meg. A vásárlóknak is sokkal egyszerűbb lesz megrendelni az egyes pólókat, nem is kell elmenniük otthonról.

## 5. Követelménylista
![image](https://user-images.githubusercontent.com/78543866/199756871-f0e8c41b-62d2-4484-974b-449ba66eb784.png)


## 6. Használati esetek
Felhasználó: Rendeléseket tud leadni az oldalon, melyeket a kosarában nyilvántart. Ezeket a termékeket majd a rendelés leadása gombbal megrendelheti az általa megadott szállítási címre.
Admin: A weboldal tartalmát tudja módosítani, CRUD műveleteket végezni a termékeken, ezáltal frissíteni tudja a weboldal repertoárját.

## 7. Követelmények megfeleltetése
Bejelentkezési felület (J1): A felhasználó bejelentkezés után tudja a kosarát megtekinteni, majd a rendelését leadni.

Regisztráció (J2): A felhasználó regisztráció után tudja a kosarába belerakni az árukat, majd azokat megrendelni.

Jogosultsági szintek (J3): A regisztráció során csak általános felhasználó jogosultságú user-ek kerülnek be az adatbázisba. Ebben az adatbázisban alapértelmezetten van egy admin jogosultságú felhasználó, aki termékeket tud hozzáadni/módosítani/törölni az oldalon.

Jelszó módosítása (M1): A felhasználó módosítani tudja a fiókjához megadott jelszavát.

## 8. Forgatókönyv
Futási időben három jogosultságú felhasználó van. Kezdetben azok a felhasználók, akik nem regisztráltak, azoknak nincs jogosultsága. Látják az oldalon lévő árukat, viszont nem tudják megnézni a kosraukat, nem tudnak ahhoz hozzá adni árukat, valamint nem tudják leadni a rendelésüket. Regisztráció után a felhasználó egy általános felhasználói jogosultságot kap, amellyel már láthatja és módosíthatja a kosarát, valamint az abban lévő árukat. Emellett pedig le tudja adni a rendelését. A harmadik jogosultság az admin, aki szintén látja az árukat, viszont számára megjelenik egy '+' és '-' gomb felettük, amelyekkel ki tudja törölni az adott árukat, vagy esetleg hozzá tud adni egy új árut az oldalhoz.

## 9. Fogalomszótár
- CRUD műveleteket: Egy adattáblán elvégezhető műveletek: létrehozás, olvasás, szerkesztés, törlés.
- web-service: különböző programnyelveken írt és különböző platformokon futó szoftveralkalmazások interneten keresztül történő adatcseréjére használt vebszolgáltatások.
