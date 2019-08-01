/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./assets/js/core.js":
/*!***************************!*\
  !*** ./assets/js/core.js ***!
  \***************************/
/*! no static exports found */
/***/ (function(module, exports) {

$(function () {
  $('.lazy-load').visibility({
    type: 'image',
    transition: 'fade in',
    duration: 1000
  }).on('load', function (e) {
    $(this).prev('.placeholder').remove();
  });
});

/***/ }),

/***/ "./assets/scss/base.scss":
/*!*******************************!*\
  !*** ./assets/scss/base.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/chat.scss":
/*!*******************************!*\
  !*** ./assets/scss/chat.scss ***!
  \*******************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/footer.scss":
/*!*********************************!*\
  !*** ./assets/scss/footer.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/header.scss":
/*!*********************************!*\
  !*** ./assets/scss/header.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/last_news.scss":
/*!************************************!*\
  !*** ./assets/scss/last_news.scss ***!
  \************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/latest_galleries.scss":
/*!*******************************************!*\
  !*** ./assets/scss/latest_galleries.scss ***!
  \*******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/most_viewed.scss":
/*!**************************************!*\
  !*** ./assets/scss/most_viewed.scss ***!
  \**************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ "./assets/scss/upcoming_events.scss":
/*!******************************************!*\
  !*** ./assets/scss/upcoming_events.scss ***!
  \******************************************/
/*! no static exports found */
/***/ (function(module, exports) {

// removed by extract-text-webpack-plugin

/***/ }),

/***/ 0:
/*!************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** multi ./assets/js/core.js ./assets/scss/base.scss ./assets/scss/last_news.scss ./assets/scss/header.scss ./assets/scss/footer.scss ./assets/scss/upcoming_events.scss ./assets/scss/most_viewed.scss ./assets/scss/chat.scss ./assets/scss/latest_galleries.scss ***!
  \************************************************************************************************************************************************************************************************************************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/js/core.js */"./assets/js/core.js");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/base.scss */"./assets/scss/base.scss");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/last_news.scss */"./assets/scss/last_news.scss");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/header.scss */"./assets/scss/header.scss");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/footer.scss */"./assets/scss/footer.scss");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/upcoming_events.scss */"./assets/scss/upcoming_events.scss");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/most_viewed.scss */"./assets/scss/most_viewed.scss");
__webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/chat.scss */"./assets/scss/chat.scss");
module.exports = __webpack_require__(/*! /var/www/uxcandy_vscode/data/public_html/dev_gavex/radio/assets/scss/latest_galleries.scss */"./assets/scss/latest_galleries.scss");


/***/ })

/******/ });