
layui.define(function(exports){

    var host = 'http://www.query_one.com/';

    var obj = {
        host : 'http://www.query_one.com/',
        login : host + 'login'
    };

    //输出test接口
    exports('api', obj);
});