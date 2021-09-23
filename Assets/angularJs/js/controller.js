app.controller('myCtrl', ['$scope', '$http', '$log', function($scope, $http, $log) {
    $scope.log = function() {
        const year = $scope.year;
        // console.log(year);
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
            // console.log(data.data.data);
            $scope.karyawanNonAktif = data.data.data
            preload.classList.remove("active");
        });

    }

    $scope.hitKonsumen = function(index) {
        $http({
            method: "get",
            url: "https://webservice.sinargalesong.net/service/api/packs",
            headers: {
                'authentication': 'rifqymuskar'
            }
        }).then(function(data) {
            console.log(data.data.data);
            $scope.servicePaket = data.data.data

            console.log($scope.servicePaket);
        });



        let info = $scope.karyawanNonAktif[index];

        $scope.nkonsumen = info.nkonsumen;
        $scope.alamat = info.alamat;
        $scope.whatApp = {
            hp: info.hp.trim(),
            tlpn: info.telp.trim(),
            tlpn1: info.telp1.trim()
        };

        $scope.selectPaket = function() {
            $scope.paketSelected = $scope.paketSelected

            $http({
                method: "get",
                url: "https://webservice.sinargalesong.net/service/api/key/packs_part?key=pack_id&value=" + $scope.paketSelected + "",
                headers: {
                    'authentication': 'rifqymuskar'
                }
            }).then(function(data) {
                console.log(data.data.data);
                $scope.listservicePaket = data.data.data
                    // console.log($scope.listservicePaket);
            });


        }



    }


    $scope.cek = function() {
        alert('alert');


    }

}]);