"use strict";
app.controller('BookController', function ($scope, LibraryService) {

    $scope.genres = $scope.publishers = $scope.authors = $scope.authors = [];
    $scope.book = {};

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

        $.post(base_url + "book/add", $scope.book, function (response) {
            if (response.code == 200) {
                // close modal
                $('#addBookModal').modal('hide');
                
                // load book
                $scope.getBook();
            }
            
            alert(response.message);
        });

        $(".modal-body").LoadingOverlay("hide", true);
    });
    
    $scope.parseDataBook = function(row){
        $scope.book = row;
    }

    $scope.getBook();
});