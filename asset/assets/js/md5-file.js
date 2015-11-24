/**
 * MD5 File function.
 * @param {File} b file binary.
 * @returns {Deferred}
 * @version 1.0
 * @copyright (c) 2014-2015 KFOSoftware Team <kfosoftware@gmail.com>
 */
;md5_file=function(b){var s=new SparkMD5.ArrayBuffer();var r=new FileReader();var def=$.Deferred();r.sum='';r.onload=function(e){s.append(e.target.result);r.sum=s.end();def.resolve();};r.readAsArrayBuffer(b);return $.Deferred(function (defowner){var self=this;$.when(def).done(function(){self.sum=r.sum;defowner.resolve();});});};