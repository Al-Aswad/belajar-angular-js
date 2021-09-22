app.controller('myCtrl', ['$scope', '$http', '$log', function($scope, $http, $log) {
    $scope.log = function() {
        const year = $scope.year;
        console.log(year);
    }
    $scope.get = function(year) {
        const bodyId = document.getElementById("bodyId");
        bodyId.classList.add("sidebar-collapse");
        const preload = document.getElementById("preload");
        preload.classList.add("active");
        $http({
            method: "get",
            url: "https://webservice.sinargalesong.net/service/api/konsumen_nonAktif?tahun=" + year + "",
            headers: {
                'authentication': 'rifqymuskar'
            }
        }).then(function(data) {
            console.log(data.data.data);
            $scope.karyawanNonAktif = data.data.data
            preload.classList.remove("active");
        });

    }

    $scope.hitKonsumen = function(index) {
        let info = $scope.karyawanNonAktif[index];
        console.log(info);
        //    alert(info.nkonsumen);
        $scope.nkonsumen = info.nkonsumen;
        $scope.alamat = info.alamat;
    }

    $scope.side = function() {
        // bodyId
        //    const bodyId = document.getElementById("bodyId");
        //    bodyId.classList.add("sidebar-collapse");
        //    alert('Tutup sidebar');
    }

}]);