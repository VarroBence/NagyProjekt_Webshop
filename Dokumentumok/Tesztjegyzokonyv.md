 | Teszteset               | Elvárt eredmény                                                                                                     | 
 |-------------------------|---------------------------------------------------------------------------------------------------------------------| 
 | Helytelen adat megadása | A művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy miért és milyen adatok megadásával történhet.|
 | Helyes adat megadása    | Megtörténik a művelet.                                                                                              | 
 | Mező üresen hagyása |A művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy miért maradt üresen.|
 | ... | ... |

#### Ezeket a teszteseteket végrehajtani a legtöbb kombinációval

**Tesztelő:** Tóth Tamás

**Tesztelés dátuma:** 2022.December.08.

| Tesztszám | Rövid leírás  | Várt eredmény | Eredmény  | Megjegyzés  |
|-----------|----------------------------------|---------------------------------------------------------------------------------|--------------------------------------------------------------------------------|---------------------------|
| Teszt #01 | "Search" mező üresen hagyása és így keresés | Művelet végrehajtódik, de az egész listát adja vissza, mintha nem is kerestünk volna | Művelet végrehajtódik, de az egész listát adja vissza, mintha nem is kerestünk volna| Nem találtam problémát.   |
| Teszt #02 | A login felületen a mezők üresen hagyása | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát.| Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Teszt #03 | A register felületen a mezők üresen hagyása | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. |Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak a problémát. | Nem találtam problémát. |
| Teszt #04 | A create felületen a mezők üresen hagyása | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. | Nem találtam problémát. |
| Teszt #05 | A create felületen nem az elvárt típusú adat megadása | Művelet nem hajtódik végre. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. | Nem találtam problémát. |
| Teszt #06 | Az update felületen nem az elvárt típusú adat megadása | Művelet nem hajtódik végre. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond. | Nem találtam problémát. |
| Teszt #07 | Az update felületen a mezők üresen hagyása  | Művelet nem hajtódik végre. | Művelet nem hajtódik végre. Üzenetben jelezni a felhasználónak, hogy mi a gond.|  Nem találtam problémát. |
| Teszt #08 | Üres kosár esetén rendelés leadása | Művelet nem hajtódik végre. |A művelet végrehajtódik |  Mi hamarabbi orvoslásra szorul |
| Teszt #09 | Ha nincs kép feltöltve a termékhez | A kép helyére egy alapértelmezett "nincs kép" lesz megjelenítve | A kép helyére egy alapértelmezett "nincs kép" lesz megjelenítve |  Nem találtam problémát. |
| Teszt #10 | Ha nincs kép feltoltve a termékre, akkor a kosárban is a "nincs kép" lesz ott  | Ha nincs kép feltoltve a termékre, akkor a kosárban is a "nincs kép" lesz ott  | Ha nincs kép feltoltve a termékre, akkor a kosárban is a "nincs kép" lesz ott  |  Nem találtam problémát. |
| Teszt #11 | Ha nincs kép feltoltve a termékre, akkor a leadott rendelésnél is a "nincs kép" lesz ott   | Ha nincs kép feltoltve a termékre, akkor a leadott rendelésnél is a "nincs kép" lesz ott  | Ha nincs kép feltoltve a termékre, akkor a leadott rendelésnél is a "nincs kép" lesz ott |  Nem találtam problémát. |
| Teszt #12 | Ha megnézünk egy terméket akkor ne adja a kosárhoz, ha visszalépünk | Nem adja a terméket a kosárhoz  | Hozzáadódik a kosárhoz, ha a bal felső sarokban lévő logo ra kattintunk |  Nagyon nagy probléma, orvosolni kell |
