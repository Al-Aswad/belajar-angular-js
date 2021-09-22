app.controller('myCtrl', ['$scope',
    function($scope) {
        $scope.title = 'Belajar Angular JS';
        $scope.books = [

            {
                title: 'belajar Angular Js',
                author: 'Agung Setiawan',
                price: '5000',
                pubdate: new Date(2021, 9 - 1, 22),
                likes: 0
            },
            {
                title: 'belajar Angular Js',
                author: 'Agung Setiawan',
                price: '5000',
                pubdate: new Date(2021, 9 - 1, 22),
                likes: 0
            },
            {
                title: 'belajar Angular Js',
                author: 'Agung Setiawan',
                price: '5000',
                pubdate: new Date(2021, 9 - 1, 22),
                likes: 0
            },
            {
                title: 'belajar Angular Js',
                author: 'Agung Setiawan',
                price: '5000',
                pubdate: new Date(2021, 9 - 1, 22),
                likes: 0
            }
        ];
        $scope.logToConsole = function(index) {
            let book = $scope.books[index];
            console.log(book);
        }
        $scope.likes = function(index) {
            $scope.books[index].likes += 1;
        }
        $scope.log = function() {
            console.log($scope.title);
        }

        $scope.dunia = "Indonesia";
    }
]);