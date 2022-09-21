"use strict";
(self["webpackChunk"] = self["webpackChunk"] || []).push([["resources_js_components_home-main_Instructor_vue"],{

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/Instructor.vue?vue&type=script&lang=js":
/*!**************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/Instructor.vue?vue&type=script&lang=js ***!
  \**************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
Object(function webpackMissingModule() { var e = new Error("Cannot find module '~/data/instructor'"); e.code = 'MODULE_NOT_FOUND'; throw e; }());

/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = ({
  components: {
    SectionTitle: function SectionTitle() {
      return Promise.resolve().then(function webpackMissingModule() { var e = new Error("Cannot find module '@/components/common/SectionTitle'"); e.code = 'MODULE_NOT_FOUND'; throw e; });
    },
    InstructorOne: function InstructorOne() {
      return Promise.resolve().then(function webpackMissingModule() { var e = new Error("Cannot find module '@/components/instructor/InstructorOne'"); e.code = 'MODULE_NOT_FOUND'; throw e; });
    }
  },
  data: function data() {
    return {
      instructorData: Object(function webpackMissingModule() { var e = new Error("Cannot find module '~/data/instructor'"); e.code = 'MODULE_NOT_FOUND'; throw e; }())
    };
  }
});

/***/ }),

/***/ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/Instructor.vue?vue&type=template&id=4f644430":
/*!******************************************************************************************************************************************************************************************************************************************************************************************!*\
  !*** ./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/Instructor.vue?vue&type=template&id=4f644430 ***!
  \******************************************************************************************************************************************************************************************************************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* binding */ render)
/* harmony export */ });
/* harmony import */ var vue__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! vue */ "./node_modules/vue/dist/vue.esm-bundler.js");

var _hoisted_1 = {
  "class": "edu-team-area team-area-1 gap-tb-text"
};
var _hoisted_2 = {
  "class": "container"
};
var _hoisted_3 = {
  "class": "row g-5"
};
function render(_ctx, _cache, $props, $setup, $data, $options) {
  var _component_SectionTitle = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("SectionTitle");

  var _component_InstructorOne = (0,vue__WEBPACK_IMPORTED_MODULE_0__.resolveComponent)("InstructorOne");

  return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", _hoisted_1, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_2, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_SectionTitle, {
    preTitle: "Instructors",
    title: "Course Instructors",
    alignment: "section-center"
  }), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementVNode)("div", _hoisted_3, [((0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(true), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)(vue__WEBPACK_IMPORTED_MODULE_0__.Fragment, null, (0,vue__WEBPACK_IMPORTED_MODULE_0__.renderList)($data.instructorData.instructors.slice(0, 4), function (instructor, key) {
    return (0,vue__WEBPACK_IMPORTED_MODULE_0__.openBlock)(), (0,vue__WEBPACK_IMPORTED_MODULE_0__.createElementBlock)("div", {
      "class": "col-lg-3 col-sm-6 col-12",
      "data-aos-delay": "50",
      "data-aos": "fade-up",
      "data-aos-duration": "800",
      key: key
    }, [(0,vue__WEBPACK_IMPORTED_MODULE_0__.createVNode)(_component_InstructorOne, {
      instructor: instructor
    }, null, 8
    /* PROPS */
    , ["instructor"])]);
  }), 128
  /* KEYED_FRAGMENT */
  ))])])]);
}

/***/ }),

/***/ "./resources/js/components/home-main/Instructor.vue":
/*!**********************************************************!*\
  !*** ./resources/js/components/home-main/Instructor.vue ***!
  \**********************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (__WEBPACK_DEFAULT_EXPORT__)
/* harmony export */ });
/* harmony import */ var _Instructor_vue_vue_type_template_id_4f644430__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./Instructor.vue?vue&type=template&id=4f644430 */ "./resources/js/components/home-main/Instructor.vue?vue&type=template&id=4f644430");
/* harmony import */ var _Instructor_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./Instructor.vue?vue&type=script&lang=js */ "./resources/js/components/home-main/Instructor.vue?vue&type=script&lang=js");
/* harmony import */ var E_sot_apps_web_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./node_modules/vue-loader/dist/exportHelper.js */ "./node_modules/vue-loader/dist/exportHelper.js");




;
const __exports__ = /*#__PURE__*/(0,E_sot_apps_web_node_modules_vue_loader_dist_exportHelper_js__WEBPACK_IMPORTED_MODULE_2__["default"])(_Instructor_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_1__["default"], [['render',_Instructor_vue_vue_type_template_id_4f644430__WEBPACK_IMPORTED_MODULE_0__.render],['__file',"resources/js/components/home-main/Instructor.vue"]])
/* hot reload */
if (false) {}


/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (__exports__);

/***/ }),

/***/ "./resources/js/components/home-main/Instructor.vue?vue&type=script&lang=js":
/*!**********************************************************************************!*\
  !*** ./resources/js/components/home-main/Instructor.vue?vue&type=script&lang=js ***!
  \**********************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "default": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Instructor_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__["default"])
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Instructor_vue_vue_type_script_lang_js__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Instructor.vue?vue&type=script&lang=js */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/Instructor.vue?vue&type=script&lang=js");
 

/***/ }),

/***/ "./resources/js/components/home-main/Instructor.vue?vue&type=template&id=4f644430":
/*!****************************************************************************************!*\
  !*** ./resources/js/components/home-main/Instructor.vue?vue&type=template&id=4f644430 ***!
  \****************************************************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

__webpack_require__.r(__webpack_exports__);
/* harmony export */ __webpack_require__.d(__webpack_exports__, {
/* harmony export */   "render": () => (/* reexport safe */ _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Instructor_vue_vue_type_template_id_4f644430__WEBPACK_IMPORTED_MODULE_0__.render)
/* harmony export */ });
/* harmony import */ var _node_modules_babel_loader_lib_index_js_clonedRuleSet_5_use_0_node_modules_vue_loader_dist_templateLoader_js_ruleSet_1_rules_2_node_modules_vue_loader_dist_index_js_ruleSet_0_use_0_Instructor_vue_vue_type_template_id_4f644430__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! -!../../../../node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!../../../../node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!../../../../node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./Instructor.vue?vue&type=template&id=4f644430 */ "./node_modules/babel-loader/lib/index.js??clonedRuleSet-5.use[0]!./node_modules/vue-loader/dist/templateLoader.js??ruleSet[1].rules[2]!./node_modules/vue-loader/dist/index.js??ruleSet[0].use[0]!./resources/js/components/home-main/Instructor.vue?vue&type=template&id=4f644430");


/***/ })

}]);