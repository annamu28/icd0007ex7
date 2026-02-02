Http protokoll

Kui saata aadressile https://mkalmo.eu/echo/ mingi päring, siis kuvab
see aadress saadetud info tagasi. Proovige see läbi mines brauseriga
sellele aadressile.

Failis form-data-examples.html on mõned vormid erinevate elementidega.
Vormide action-iks on määratud sama echo aadress.

Jälgige millise info ja mis kujul brauser iga vormi postitamisel saadab
(avage leht brauseris ja vajutage "Saada"). Lisaks pange tähele, mida
saadetakse, kui mõni element (checkbox, raadio, vms) vormist on
täitmata.

Aadressil https://enos.itcollege.ee/~makalm/icd0007/foorum/ on lihtne
foorumi rakendus.

Sisenemiseks peate kirjutama oma Github'i kasutajanime. Foorumi rakendus
ei kontrolli, kas see on õige aga ülesannetest punktide saamiseks peab
see õige olema. Seega on kasulik veenduda, et see on õige.

Ülesande sisu on selle rakenduse kasutamine. Läbi brauseri on see
triviaalne, Postmaniga peab tegema rohkem tööd ja madalama taseme
kliendiga veel rohkem.

Kokkuvõttes peate koguma 21 koodi ja need esitama. Tehke oma projekti
reposse (icd0007) kataloog ex7 ja sinna sisse fail nimega tokens.txt.
Kogutud koodid lähevad sinna faili. Iga kood eraldi reale ja koos "Token
..." prefiksiga.

1.  Esimese koodi saate rakenduse avalehele minnes: "Token 1:
    cdfc8754ad1c6f3".

2.  Kirjutage Github'i kasutajatunnus ja vajutage nupule edasi.

3.  Foorumisse on üks kirje juba lisatud. Avage see.

4.  Sisestage uus kirje (Menüüst "Sisesta").

5.  Sisestage uus kirje, mille tekstis on reavahetus.

6.  Logige sisse kasutajaga admin ja salasõnaga 123 (Menüüst "Logi
    sisse").

7.  Kustutage enda loodud kirje.

8.  Paigaldage Postmani rakendus: https://www.postman.com/downloads/

    Tehke samad punktid läbi kasutades brauseri asemel Postmani
    rakendust. Seda, millised päringud te täpselt peate tegema saate
    vaadata brauserist arendaja tööriistade abil ("Network" sakk).

    POST päringu tegemisel aadressile
    https://enos.itcollege.ee/~makalm/icd0007/foorum/ jälgige et lõpus
    oleks "/".

    Kustutamise päringu tegemisel peaks tähele panema, et päringule
    tuleb lisada päise atribuut võtmega X-Secret ja väärtusega 123456.
    Kustutamise päringule järgneb ümbersuunamine. Kustutamise päring
    tagastab võtme, mis tuleb ümbersuunamisel kaasa anda.

    Rakendus loeb päringud Postmani päringuteks, kui päringu päises on
    mõni võti või väärtus, mis sisaldab sõna "postman". Postman paneb
    need ise. Kui Te mingil põhjusel Postmani kasutada ei soovi, siis
    võite ise sellise päise panna.

    Selle punkti käigus saate koodid 8-14.

9.  Tehke samad punktid läbi kasutades madalama taseme klienti. Näiteks
    ncat, curl või ülesande materjalides olev request-sender.php.

    Kui request-sender.php peaks andma vea 'Unable to find the socket
    transport "tls" ...', siis peaksite php.ini failis sisse
    kommenteerima (semikooloni eemaldama) rea ;extension=openssl

    Rakendus loeb päringud madalama taseme klienti päringuteks, kui
    päringu päises ei ole võtmeid: "User-Agent", "Accept-Language",
    "Accept-Encoding", "Origin", "Accept" või "Cache-Control". Seega
    vahend, mida kasutate peab võimaldama nende eemaldamist. ncat ja
    curl vaikimisi saadavad mõned neist aga saab määrata, et ei saadaks.

    Selle punkti käigus saate koodid 14-21.

Kui töö on valmis, siis Commit-ige muudatused ja push-ige need Github'i.

Lisage commit-ile tag ex7.

Seletus ja lahendus: https://youtu.be/ZeA77ZLyvfA
