# Funkcionális Specifikáció

## 1. Áttekintés
Egy olyan weboldalt fejleszünk, ami a megrendelő által árult pólók online megvásárlását segíti elő. Lehetősége lesz minden felhasználónak böngészni az árukat, attól függetlenül, hogy regiszráltak-e vagy be vannak-e jelentkezve. Rendelést leadni és azokat követni/törölni csak az a felhasználó tud, aki regisztrált és be van jelentkezve a fiókjába. Az adminként bejelentkezett felhasználó tudja törölni és módosítani az oldalon megjelenő árukat.


## 2. Jelenlegi helyzet
A megrendelő szeretné megnövelni a bevételét oly módon, hogy online is rendeléseket fogad, illetve azokat kiszállítja. Egy új weboldal előállítását rendelte meg, ahol rendeléseket lehet leadni online formában is.  Ezen keresztül tudják a vásárlók kiválasztani, hogy mit szeretnének rendelni. Számos létező alkalmazást nézett meg a megrendelő, viszont egyik sem illett a cég profiljához, így amellett döntött, hogy egy teljesen új alkalmazás megrendelése miatt hozzánk fordul.

## 3. Jelenlegi üzleti folyamatok modellje
A mai világban, már a legtöbb cég rendelkezik online felülettel, ahol elérhetik a vásárlók a termékeiket. Sokkal kényelmesebbé és probléma mentesebbé teszi a vásárlást, valamit könnyebben elérhetőbbé teszi egyes termékek megvásárlását.


## 4. Igényelt üzleti folyamatok modellje
Azért hogy egyszerűbbé tegyük a vásárlók és eladók közötti interakciót, létrehozunk egy alkalmazást, ami a mai kornak megfelelően helyt tud állni az elektronikai világban. Az eladóknak egyszerűbb lesz nagyobb tömeget kiszolgálnia a rendelésekkel, így időt és munkaerőt takaríthat meg. A vásárlóknak is sokkal egyszerűbb lesz megrendelni az egyes pólókat, nem is kell elmenniük otthonról.


## 6. Használati esetek
Felhasználó: Rendeléseket tud leadni az oldalon, melyeket a kosarában nyilvántart. Ezeket a termékeket majd a rendelés leadása gombbal megrendelheti a megadott szállítási címre.
Admin: A weboldalt tudja módosítani, CRUD műveleteket végezni a termékeken, ezáltal frissíteni tudja a weboldal repertoárját.

## 7. Forgatókönyv
Futási időben két szereplő figyelhető meg, az egyik maga a webshop, ami várja a felhasználó utasításait, lépéseit. A másik maga afelhasználó aki utasításokat ad a weboldalnak, regisztráció/belépés, böngészés az áruház termékei között, összegyűjti a kosarába azokat a termékeket, amiket megszeretne vásárolni, majd leadja a rendelését.
