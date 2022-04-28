fetch('http://api.openweathermap.org/data/2.5/weather?id=524901&lang=ru&appid=665b088614ce2c20d7d8c02fca32db87').then(function (resp) {return resp.json() }).then(function (data) {
    //добавляем название города
    document.querySelector('.weather__city').textContent = data.name;
    //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
    document.querySelector('.weather__forecast').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
    })
    .catch(function () {
        //Обрабатываем ошибки
    });
fetch('http://api.openweathermap.org/data/2.5/weather?id=472045&lang=ru&appid=665b088614ce2c20d7d8c02fca32db87').then(function (resp) {return resp.json() }).then(function (data) {
    //добавляем название города
    document.querySelector('.weather__city__voronesh').textContent = data.name;
    //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
    document.querySelector('.weather__forecast__voronesh').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
    })
    .catch(function () {
        //Обрабатываем ошибки
    });
fetch('http://api.openweathermap.org/data/2.5/weather?id=580497&lang=ru&appid=665b088614ce2c20d7d8c02fca32db87').then(function (resp) {return resp.json() }).then(function (data) {
    //добавляем название города
    document.querySelector('.weather__city__astrahan').textContent = data.name;
    //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
    document.querySelector('.weather__forecast__astrahan').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
    })
    .catch(function () {
        //Обрабатываем ошибки
    });
fetch('http://api.openweathermap.org/data/2.5/weather?id=491422&lang=ru&appid=665b088614ce2c20d7d8c02fca32db87').then(function (resp) {return resp.json() }).then(function (data) {
    //добавляем название города
    document.querySelector('.weather__city__sochi').textContent = data.name;
    //data.main.temp содержит значение в Кельвинах, отнимаем от  273, чтобы получить значение в градусах Цельсия
    document.querySelector('.weather__forecast__sochi').innerHTML = Math.round(data.main.temp - 273) + '&deg;';
    })
    .catch(function () {
        //Обрабатываем ошибки
    });