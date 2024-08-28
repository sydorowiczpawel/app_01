Laravel - jak zacząć:

I. Zainstaluj niezbędne oprogramowanie

XAMPP:		        Download XAMPP (apachefriends.org)
VS Code:		    Download Visual Studio Code - Mac, Linux, Windows
Node.js with npm:	Node.js — Download Node.js® (nodejs.org)
Composer: 		    https://getcomposer.org/download/
GitBash:		    https://gitforwindows.org/

Po instalacji XAMPP należy wskazać systemowi ścieżkę, z której będzie brał php. Trzeba wejść w środowisko uruchomieniowe Windows:

Odszukaj „environment variabes” (zmienne środowiskowe)
Zaawansowane/zmienne środowiskowe
W tabeli „zmienne systemowe” odszukaj „path” i kliknij dwukrotnie
Nowy/ścieżka do php
W przypadku xampp będzie to C:/xampp/php

Po instalacji wejdź w GitBash i sprawdź czy wszystkie komponenty są zainstalowane i widoczne. W tym celu należy wpisać:

npm –v
php -v
composer
laravel -v

Każde polecenie powinno zwrócić informację o wersji lub spis komend.
Jeżeli „laravel –v” nie zwraca wersji należy wpisać komendę:

composer global require laravel/installer
oraz
npm install –D vue-loader vue-template-compiler



II. Praca z nowym projektem

Otwórz GitBash i wskaż ścieżkę gdzie zainstalowany będzie nowy projekt, np.:

cd documents/repos

Utwórz nowy projekt Laravel i nazwij go:

Laravel new projectName

Przejdź w GitBash do lokalizacji projektu:

cd projektName

Utwórz Model z tabelą w bazie oraz kontroler:

php artisan make:model User –m
php artisan make:controller UserController -r

Następnym krokiem będzie migracja bazy danych. W tym celu uruchom XAMPP, uruchom serwer Apache oraz bazę danych MySQL.
Uruchom zakładkę „Admin” bazy danych MySQL
Po uruchomieniu się przeglądarki, po lewej stronie są gotowe bazy danych, ale Ty utwórz swoją własną na potrzeby projektu. Pamiętaj!!! To są bazy lokalne. Na innych komputerach ich nie będzie. Kontynuując projekt na innym komputerze musisz utworzyć bazę o takiej samej nazwie.
Po utworzeniu bazy danych wróć do GitBash i uruchom komendę:

php artisan migrate

Wpisz kolejno poniższe polecenia:

composer require laravel/ui
php artisan ui vue –auth

Uruchom drugą console GitBash
W pierwszej wpisz:

php artisan serve

W drugiej wpisz:

npm install && npm run dev

Migracje
php artisan migrate		- tworzy migrację bazy danych
php artisan migrate:refresh	- aktualizuje bazę danych o nowe elementy
php artisan migrate:rollback	- cofa ostatnią migrację

III. GitHub

git config --global user.name "Paweł Sydorowicz"
git config --global user.email pawelsydorowicz@gmail.com

Robienie clone`a i praca na branchu:
git clone https://github.com/sydorowiczpawel/nazwa_repo.git

Jak nie ma brancha który chcesz pullować:

git remote update origin - powinny pokazać się wszystkie branche,
git checkout -b nazwabrancha remotes/origin/nazwabrancha

Sprawdzasz na jakim branchu jesteś (musisz być na masterze)
git checkout
Pobierasz najnowsza wersje projektu
git pull
Tworzysz branch do pracy
git branch nazwabrancha
Zmieniasz branch na nowo utworzony
git checkout nazwabrancha
Kończenie pracy na branchu i commit
git status
git add --all
git commit -m "..."
git checkout master
git merge nazwabrancha
git log --graph --decorate --all --oneline
Zmieniasz brancha na master
git checkout master
git merge nazwabranchanaktorympracowales
git log --graph --decorate --all --oneline
Usuwanie brancha 
git branch -D nazwabrancha
Wrzucasz wszystko na serwer 
git push

IV. SKRYPT DO BAZY DANYCH

/* Użytkownicy */
INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA002', 'kapitan', 'Daniel', 'Gorczyca', 'dowódca kompanii', '26 kzs', 'n/d', 'n/d', 'commander@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA003', 'st. chor. szt.', 'Daniel', 'Gorczyca', 'szef kompanii', '26 kzs', 'n/d', 'n/d', 'szefKompanii@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA004', 'kapitan', 'Daniel', 'Gorczyca', 'technik kompanii', '26 kzs', 'n/d', 'n/d', 'technikKompanii@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA005', 'kapitan', 'Daniel', 'Gorczyca', 'technik uzbrojenia', '26 kzs', 'n/d', 'n/d', 'technikUzbrojenia@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA006', 'kapitan', 'Daniel', 'Gorczyca', 'dowódca plutonu', '26 kzs', 'I', 'n/d', 'dowodcaP1@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA007', 'kapitan', 'Daniel', 'Gorczyca', 'dowódca plutonu', '26 kzs', 'II', 'n/d', 'dowodcaP2@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA009', 'kapitan', 'Daniel', 'Gorczyca', 'dowódca plutonu', '26 kzs', 'III', 'n/d', 'dowodcaP3@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA008', 'kapitan', 'Daniel', 'Gorczyca', 'dowodca plutonu', '26 kzs', 'IV', 'n/d', 'dowodcaP4@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA010', 'kapitan', 'Daniel', 'Gorczyca', 'pomocnik dowódcy plutonu', '26 kzs', 'I', 'n/d', 'pomocnikDP1@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA011', 'kapitan', 'Daniel', 'Gorczyca', 'pomocnik dowódcy plutonu', '26 kzs', 'II', 'n/d', 'pomocnikDP2@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA012', 'kapitan', 'Daniel', 'Gorczyca', 'pomocnik dowódcy plutonu', '26 kzs', 'III', 'n/d', 'pomocnikDP3@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA013', 'kapitan', 'Daniel', 'Gorczyca', 'pomocnik dowódcy plutonu', '26 kzs', 'IV', 'n/d', 'pomocnikDPIV@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA014', 'kapitan', 'Daniel', 'Gorczyca', 'instruktor', '26 kzs', 'I', 'n/d', 'instruktorP1@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA015', 'kapitan', 'Daniel', 'Gorczyca', 'instruktor', '26 kzs', 'II', 'n/d', 'instruktorP2@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA016', 'kapitan', 'Daniel', 'Gorczyca', 'instruktor', '26 kzs', 'III', 'n/d', 'instruktorP3@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA017', 'kapitan', 'Daniel', 'Gorczyca', 'instruktor', '26 kzs', 'IV', 'n/d', 'instruktorP4@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA018', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca – starszy instruktor', '26 kzs', 'I', 'pierwsza', 'kierowcasi1@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA019', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca – starszy instruktor', '26 kzs', 'II', 'druga', 'kierowcasi2@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA020', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca – starszy instruktor', '26 kzs', 'III', 'trzecia', 'kierowcasi3@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA021', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca – starszy instruktor', '26 kzs', 'IV', 'czwarta', 'kierowcasi4@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA022', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca', '26 kzs', 'I', 'pierwsza', 'kierowca1@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA023', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca', '26 kzs', 'II', 'druga', 'kierowca2@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA024', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca', '26 kzs', 'III', 'trzecia', 'kierowca3@wp.pl', 'password');

INSERT into users (passNumber, rank, firstName, lastName, job_name, coy, platoon, team, email, password)
Values ('AA025', 'kapitan', 'Daniel', 'Gorczyca', 'kierowca', '26 kzs', 'IV', 'czwarta', 'kierowca4@wp.pl', 'password');

/* Pojazdy */
Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0001');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0002');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0003');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0004');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0005');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0006');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0007');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0008');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0009');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Radziecki', 'T72', 'UA0010');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0011');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0012');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0013');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0014');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0015');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0016');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0017');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0018');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0019');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'Polski', 'PT91', 'UA0020');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0021');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0022');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0023');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0024');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0025');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0026');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0027');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0028');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0029');

Insert Into tanks (passNumber, manufacturer, model, vehicle_number)
Values ('AA002', 'General Dynamics', 'Abrams M1A2 SEPv3', 'UA0030');