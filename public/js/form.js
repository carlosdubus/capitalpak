$(function() {
    $("#datepicker-13").datepicker();
    //$( "#datepicker-13" ).datepicker("setDate", "10w+1");
});

angular.module("form", [])
    .controller("FormCtrl", function($scope) {
        var MAX_ENVIOS = 15;
        var MIN_ENVIOS = 1;
        $scope.envios = {};
        $scope.enviosCount = 1;
        $scope.currentEnvio = 1;

        $scope.$watch('enviosCount', function() {

            if(!$scope.enviosCount || isNaN($scope.enviosCount) || $scope.enviosCount < MIN_ENVIOS){
                $scope.enviosCount = MIN_ENVIOS;
            }

            if($scope.enviosCount > MAX_ENVIOS){
                $scope.enviosCount = MAX_ENVIOS;
            }


            if ($scope.currentEnvio > $scope.enviosCount) {
                $scope.currentEnvio = $scope.enviosCount;
            }
        });

        function getMontoExtra(division) {
            if (!division || !division.toLowerCase) {
                return 0;
            }
            division = division.toLowerCase();
            if (division.indexOf("distrito") >= 0) {
                return 0;
            }
            if (division.indexOf("santo domingo") >= 0) {
                return 50;
            }

            return 100;
        }

        $scope.monto = function() {

            var v = 150 * $scope.enviosCount;

            if ($scope.envios.division) {
                for (var i in $scope.envios.division) {
                    v += getMontoExtra($scope.envios.division[i]);
                }
            }

            return v.toFixed(2);
        };
        $scope.getEnvios = function() {
            return new Array($scope.enviosCount);
        };
        $scope.selectEnvio = function(num) {
            $scope.currentEnvio = num;
        };
        $scope.submit = function(e, form) {


            form.$submitted = true;

            if (form.$invalid) {
                // e.preventDefault();
                var $first = $("#contactForm").find(".ng-invalid").first();
                if ($first.is("[data-envio]")) {
                    $scope.selectEnvio(parseInt($first.attr("data-envio")) + 1);
                }
                if ($first.is(".dropdown-field")) {
                    $first = $first.next();
                }
                setTimeout(function() {
                    $first.focus();
                }, 0);

                return;
            }

            window.open('/gracias', 'popUpWindow', 'height=500,width=800,left=100,top=100,resizable=yes,scrollbars=yes,toolbar=yes,menubar=no,location=no,directories=no, status=yes');
            $("#contactForm")[0].submit();
        };
        $scope.errorClass = function(form, name) {
            var dirty = form.$submitted || form[name].$dirty;
            return {
                'error-border': dirty && form[name].$invalid
            };
        }
    })
    .directive("dropdown", function() {
        return {
            scope: {
                ngModel: '='
            },
            link: function(scope, element) {
                element.parent().find("a").click(function(e) {

                    var value = $.trim($(this).text());
                    var text = $.trim($(this).text());
                    //element.val(value);
                    scope.ngModel = value;
                    scope.$apply(); //
                    element.parent().find("button").html(text);;

                    //return false;
                });
            }
        };
    });