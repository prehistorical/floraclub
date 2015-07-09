(function (global, factory) {
   typeof exports === 'object' && typeof module !== 'undefined' ? factory(require('.')) :
   typeof define === 'function' && define.amd ? define(['.'], factory) :
   factory(global.moment)
}(this, function (moment) { 'use strict';
