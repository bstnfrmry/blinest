import{c as o,a as r,w as c,u as d,F as u,o as s,X as _,b as e,g as i,v as h,t as n}from"./app-f6824ecf.js";import{_ as x}from"./AppLayout-682c8b6d.js";import l from"./Rooms-7b6ca473.js";import"./LanguageSwitcher-d168d683.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Dropdown-b8d92112.js";import"./Icon-1ce38a62.js";import"./Navbar-c61313dc.js";import"./TextInput-4085333a.js";import"./v4-cf522c50.js";import"./throttle-b11e308e.js";import"./_defineProperty-98183d58.js";import"./isSymbol-363e1f0a.js";import"./debounce-d2fd0fa0.js";import"./SocialIcon-b495e5c3.js";import"./Room-298c5b23.js";import"./Top-88156b2a.js";const f=e("title",null,"Quiz musicaux gratuits et multijoueurs",-1),v=e("meta",{name:"description",content:"Simple et efficace! Blind-tests multijoueurs, Années 2000, Disney, Chanson française, Années 80, etc."},null,-1),p={key:0},g={class:"flex flex-wrap items-center"},b={key:0,class:"relative mb-4 flex-grow"},k=e("h2",{class:"text-xl text-neutral-400 lg:text-2xl mb-1"},"TOP 5",-1),y={key:0,class:"relative mb-4"},j={class:"text-xl text-neutral-400 lg:text-2xl mb-1"},O={key:2},w={class:"relative"},B={class:"text-xl text-neutral-400 lg:text-2xl mb-1"},A={key:3},C={class:"relative"},N={class:"text-xl text-neutral-400 lg:text-2xl mb-1"},K={__name:"Index",props:{filters:Object,categories:Object,private_rooms:Object,user_rooms:Object,top_rooms:Array},setup(t){return(m,V)=>(s(),o(u,null,[r(d(_),null,{default:c(()=>[f,v]),_:1}),r(x,null,{default:c(()=>[t.filters.search?i("",!0):(s(),o("section",p,[e("div",g,[t.top_rooms?(s(),o("div",b,[k,r(l,{rooms:t.top_rooms},null,8,["rooms"])])):i("",!0)])])),t.categories.length?(s(!0),o(u,{key:1},h(t.categories,a=>(s(),o("section",{key:a.id},[a.rooms.data.length?(s(),o("div",y,[e("h2",j,n(a.name),1),r(l,{rooms:a.rooms,id:a.id},null,8,["rooms","id"])])):i("",!0)]))),128)):i("",!0),t.private_rooms&&t.private_rooms.data.length?(s(),o("section",O,[e("div",w,[e("h2",B,n(m.__("Private rooms")),1),r(l,{rooms:t.private_rooms,id:"private"},null,8,["rooms"])])])):i("",!0),t.user_rooms&&t.user_rooms.data.length?(s(),o("section",A,[e("div",C,[e("h2",N,n(m.__("My rooms")),1),r(l,{rooms:t.user_rooms,id:"private"},null,8,["rooms"])])])):i("",!0)]),_:1})],64))}};export{K as default};