app.service('LibraryService', function ($http, $q) {
    
    this.getBook = function () {
        var d = $q.defer();
        $http.get(base_url + 'book/get').then(function (response) {
            d.resolve(response);
        });

        return d.promise;
    };

    this.getGenre = function () {
        var d = $q.defer();
        $http.get(base_url + 'genre/get').then(function (response) {
            d.resolve(response);
        });

        return d.promise;
    };

    this.getPublisher = function () {
        var d = $q.defer();
        $http.get(base_url + 'publisher/get').then(function (response) {
            d.resolve(response);
        });

        return d.promise;
    };
    
    this.getAuthor = function () {
        var d = $q.defer();
        $http.get(base_url + 'author/get').then(function (response) {
            d.resolve(response);
        });

        return d.promise;
    };
});