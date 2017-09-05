"use strict";
app.controller('RentController', function ($scope, LibraryService) {

    $scope.genres = $scope.publishers = $scope.authors = $scope.authors = [];
    $scope.book = {};
    $scope.edit = true;

    $scope.getBook = function () {
        LibraryService.getBook().then(function (response) {
            $scope.books = response.data.data;
        });
    };

    LibraryService.getGenre().then(function (response) {
        $scope.genres = response.data.data;
    });

    LibraryService.getPublisher().then(function (response) {
        $scope.publishers = response.data.data;
    });

    LibraryService.getAuthor().then(function (response) {
        $scope.authors = response.data.data;
    });

    $('.addBookButton').click(function (e) {
        e.preventDefault();
        $(".modal-body").LoadingOverlay("show");
        
        console.log($scope.book);

        if ($scope.book.id != null) {
            delete($scope.book.$$hashKey);
            delete($scope.book.publisher_name);
            delete($scope.book.genre_name);
            delete($scope.book.author_name);
            delete($scope.book.status);
            $.post(base_url + "book/edit/" + id, $scope.book, function (response) {
                if (response.code == 200) {
                    // close modal
                    $('#addBookModal').modal('hide');

                    // load book
                    $scope.getBook();
                }

                alert(response.message);
            });
        } else {
            $.post(base_url + "book/add", $scope.book, function (response) {
                if (response.code == 200) {
                    // close modal
                    $('#addBookModal').modal('hide');

                    // load book
                    $scope.getBook();
                }

                alert(response.message);
            });
        }

        $(".modal-body").LoadingOverlay("hide", true);
    });

    $scope.parseDataBook = function (row) {
        $scope.book = row;
        $scope.edit = true;
    };

    $scope.deleteBook = function (row) {
        $(".panel").LoadingOverlay("show");

        $.get(base_url + "book/delete/" + row.id, function (response) {
            if (response.code == 200) {
                // load book
                $scope.getBook();
            }

            alert(response.message);
        });

        $(".panel").LoadingOverlay("hide", true);
    };

    $scope.getBook();
});