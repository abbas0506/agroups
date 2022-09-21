"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_home-main_FunFact_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/FunFact.vue?vue&type=script&lang=js":
/*!***********************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/FunFact.vue?vue&type=script&lang=js ***!
  \***********************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    FunFact: function FunFact() {
      return Promise.resolve().then(function webpackMissingModule() { var e = new Error("Cannot find module '@/components/FunFact'"); e.code = 'MODULE_NOT_FOUND'; throw e; });
    },
    MouseMove: function MouseMove() {
      return Promise.resolve().then(function webpackMissingModule() { var e = new Error("Cannot find module '@/components/animation/MouseMove'"); e.code = 'MODULE_NOT_FOUND'; throw e; });
    }
  },
  data: function data() {
    return {
      funFacts: [{
        number: 19.3,
        decimal: 1,
        "class": 'primary-color',
        title: 'STUDENT ENROLLED',
        suffix: 'K'
      }, {
        number: 12.4,
        decimal: 1,
        "class": 'secondary-color',
        title: 'CLASS COMPLETED',
        suffix: 'K'
      }, {
        number: 300,
        decimal: null,
        "class": 'extra05-color',
        title: 'TOP INSTRUCTORS',
        suffix: '+'
      }, {
        number: 100,
        decimal: null,
        "class": 'extra02-color',
        title: 'SATISFACTION RATE',
        suffix: '%'
      }]
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/FunFact.vue?vue&type=template&id=25d40808":
/*!***************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/FunFact.vue?vue&type=template&id=25d40808 ***!
  \***************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "counterup-area-2"
};
var _hoisted_2 = {
  "class": "container"
};
var _hoisted_3 = {
  "class": "row g-5 justify-content-center"
};
var _hoisted_4 = {
  "class": "col-lg-8"
};
var _hoisted_5 = {
  "class": "counterup-box-wrap"
};
var _hoisted_6 = {
  "class": "counterup-box counterup-box-1"
};
var _hoisted_7 = {
  "class": "title"
};
var _hoisted_8 = {
  "class": "counterup-box counterup-box-2"
};
var _hoisted_9 = {
  "class": "title"
};
var _hoisted_10 = {
  "class": "shape-group"
};

var _hoisted_11 = /*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("li", {
  "class": "shape-2"
}, [/*#__PURE__*/(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("img", {
  "class": "rotateit",
  src: "/images/counterup/shape-02.png",
  alt: "Shape"
})], -1
/* HOISTED */
);

function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_FunFact = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("FunFact", true);

  var _component_MouseMove = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("MouseMove");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_4, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_5, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_6, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.funFacts.slice(0, 2), function (counter, i) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "edu-counterup counterup-style-2",
      key: i
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", {
      "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["counter-item count-number", counter["class"]])
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_FunFact, {
      number: counter.number,
      decimal: counter.decimal,
      suffix: counter.suffix
    }, null, 8
    /* PROPS */
    , ["number", "decimal", "suffix"])], 2
    /* CLASS */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h6", _hoisted_7, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(counter.title), 1
    /* TEXT */
    )]);
  }), 128
  /* KEYED_FRAGMENT */
  ))]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_8, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.funFacts.slice(2, 4), function (counter, i) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "edu-counterup counterup-style-2",
      key: i
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h2", {
      "class": (0,vue__WEBPACK_IMPORTED_MODULE_0__.normalizeClass)(["counter-item count-number", counter["class"]])
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_FunFact, {
      number: counter.number,
      decimal: counter.decimal,
      suffix: counter.suffix
    }, null, 8
    /* PROPS */
    , ["number", "decimal", "suffix"])], 2
    /* CLASS */
    ), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("h6", _hoisted_9, (0,vue__WEBPACK_IMPORTED_MODULE_0__.toDisplayString)(counter.title), 1
    /* TEXT */
    )]);
  }), 128
  /* KEYED_FRAGMENT */
  ))]), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("ul", _hoisted_10, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_MouseMove, {
    addClassName: "shape-1",
    dataDepth: "-1.6",
    "data-aos-delay": "100",
    "data-aos": "fade",
    "data-aos-duration": "100",
    imgSrc: "/images/about/shape-13.png"
  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_MouseMove, {
    addClassName: "shape-3",
    dataDepth: "1.6",
    "data-aos-delay": "100",
    "data-aos": "fade",
    "data-aos-duration": "100",
    imgSrc: "/images/counterup/shape-04.png"
  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_MouseMove, {
    addClassName: "shape-4",
    dataDepth: "-1.6",
    "data-aos-delay": "100",
    "data-aos": "fade",
    "data-aos-duration": "100",
    imgSrc: "images/counterup/shape-05.png"
  }), _hoisted_11])])])])])]);
}

/***/ }),

/***/ "./resources/js/components/home-main/FunFact.vue":
/*!*******************************************************!*\
  !*** ./resources/js/components/home-main/FunFact.vue ***!
  \*******************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _FunFact_vue_vue_type_template_id_25d40808__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./FunFact.vue?vue&type=template&id=25d40808 */ "./resources/js/components/home-main/FunFact.vue?vue&type=template&id=25d40808");
/* harmony import */ var _FunFact_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./FunFact.vue?vue&type=script&lang=js */ "./resources/js/components/home-main/FunFact.vue?vue&type=script&lang=js");
/* harmony import */ var E_sot_apps_web_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,E_sot_apps_web_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_FunFact_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_FunFact_vue_vue_type_template_id_25d40808__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/home-main/FunFact.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/home-main/FunFact.vue?vue&type=script&lang=js":
/*!*******************************************************************************!*\
  !*** ./resources/js/components/home-main/FunFact.vue?vue&type=script&lang=js ***!
  \*******************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_FunFact_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_FunFact_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./FunFact.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/FunFact.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/home-main/FunFact.vue?vue&type=template&id=25d40808":
/*!*************************************************************************************!*\
  !*** ./resources/js/components/home-main/FunFact.vue?vue&type=template&id=25d40808 ***!
  \*************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_FunFact_vue_vue_type_template_id_25d40808__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_FunFact_vue_vue_type_template_id_25d40808__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./FunFact.vue?vue&type=template&id=25d40808 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/FunFact.vue?vue&type=template&id=25d40808");


/***/ })

}]);