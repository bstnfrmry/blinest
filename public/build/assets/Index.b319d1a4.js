import{q as w,k as v,o as r,b as o,d as l,u as i,w as n,F as u,H as C,t as a,g as m,L as c,h,c as p,a as e,y as x,n as N,x as V}from"./app.2ccf841f.js";import{_ as B}from"./AppLayout.59afe51e.js";import{_ as g}from"./Icon.6689216d.js";import{_ as R}from"./Pagination.535567c1.js";import{_ as j}from"./SearchFilter.5cf78649.js";import{C as $}from"./Card.53d0f134.js";import{t as F,p as L}from"./pickBy.83d2d581.js";import"./LanguageSwitcher.cb537353.js";import"./plugin-vue_export-helper.21dcd24c.js";import"./Dropdown.6ea7b926.js";import"./Navbar.f548c814.js";import"./TextInput.c49deda3.js";import"./SocialIcon.895ec767.js";import"./debounce.1e54c607.js";import"./_defineProperty.09f4b3d5.js";const S={key:0,class:"mb-8 text-3xl font-bold"},H={key:1,class:"mb-6 flex items-center justify-between"},I={class:"overflow-x-auto"},O={class:"w-full whitespace-nowrap"},P={class:"text-left font-bold"},q={class:"px-2 pb-4 pt-6"},z={class:"px-2 pb-4 pt-6"},A={class:"px-2 pb-4 pt-6"},D={class:"px-2 pb-4 pt-6"},E={class:"px-2 pb-4 pt-6"},M={class:"px-2 pb-4 pt-6",colspan:"2"},T={class:"border-t"},U=["src"],Y={class:"flex flex-col"},G={class:"max-w-[18rem] truncate text-gray-500"},J={class:"border-t"},K={class:"flex items-center px-2 py-4 text-sm"},Q={class:"border-t"},W={class:"border-t"},X={key:0,class:"flex items-center px-2 py-4 text-sm"},Z={key:1,class:"text-xs text-neutral-500"},ee={class:"border-t"},te={class:"border-t"},se={key:0,class:"text-xs text-neutral-500"},ae={class:"w-px border-t"},re={key:0},oe={class:"border-t px-2 py-4",colspan:"6"},le={key:3,class:"mx-auto max-w-screen-xl py-8 px-4 text-center lg:py-16 lg:px-6"},ie={class:"mx-auto mb-8 max-w-screen-sm lg:mb-16"},de={class:"mb-4 text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white"},ne=e("p",{class:"text-lg"},[h(`"Si \xE0 50 ans on n'a pas de Room sur Blinest, on a rat\xE9 sa vie." `),e("br"),e("small",{class:"text-xs italic"},"Auteur inconnu.")],-1),ce={class:"my-8 flex justify-center"},Ve={__name:"Index",props:{filters:Object,rooms:Object},setup(d){const y=d,_=w({search:y.filters.search,trashed:y.filters.trashed});v(_,F(()=>{V.Inertia.get("/rooms",L(_),{remember:"forget",preserveState:!0})},150),{deep:!0});const k=()=>{_.reset()};return(t,b)=>(r(),o(u,null,[l(i(C),{title:"Rooms"}),l(B,null,{default:n(()=>[d.rooms&&d.rooms.data.length?(r(),o("h1",S,a(t.__("Rooms")),1)):m("",!0),d.rooms&&d.rooms.data.length?(r(),o("div",H,[l(j,{modelValue:i(_).search,"onUpdate:modelValue":b[0]||(b[0]=s=>i(_).search=s),class:"mr-4 w-full max-w-md",onReset:k},null,8,["modelValue"]),l(i(c),{class:"btn-primary",href:t.route("rooms.create")},{default:n(()=>[h(a(t.__("Create a room")),1)]),_:1},8,["href"])])):m("",!0),d.rooms&&d.rooms.data.length?(r(),p($,{key:2},{default:n(()=>[e("div",I,[e("table",O,[e("tr",P,[e("th",q,a(t.__("Name")),1),e("th",z,a(t.__("Moderators")),1),e("th",A,a(t.__("Category")),1),e("th",D,a(t.__("Playlists")),1),e("th",E,a(t.__("Rounds played")),1),e("th",M,a(t.__("Visibility")),1)]),(r(!0),o(u,null,x(d.rooms.data,s=>(r(),o("tr",{key:s.id},[e("td",T,[l(i(c),{class:"flex items-center px-2 py-4",href:t.route("rooms.edit",s.id)},{default:n(()=>[s.photo?(r(),o("img",{key:0,class:"-my-2 mr-2 block h-10 w-10 rounded-full",src:s.photo},null,8,U)):m("",!0),e("div",Y,[h(a(s.name)+" ",1),e("small",G,a(s.description),1)]),s.deleted_at?(r(),p(g,{key:1,name:"trash",class:"ml-2 h-3 w-3 flex-shrink-0 fill-gray-400"})):m("",!0)]),_:2},1032,["href"])]),e("td",J,[l(i(c),{class:"flex items-center px-2 py-4",href:t.route("rooms.edit",s.id),tabindex:"-1"},{default:n(()=>[e("ul",K,[(r(!0),o(u,null,x(s.moderators,f=>(r(),o("li",{key:f.id,class:"badge"},a(f.name),1))),128))])]),_:2},1032,["href"])]),e("td",Q,[s.category?(r(),p(i(c),{key:0,class:"flex items-center px-2 py-4",href:t.route("rooms.edit",s.id),tabindex:"-1"},{default:n(()=>[h(a(s.category.name),1)]),_:2},1032,["href"])):m("",!0)]),e("td",W,[l(i(c),{class:"flex items-center px-2 py-4",href:t.route("rooms.edit",s.id),tabindex:"-1"},{default:n(()=>[s.playlists.length?(r(),o("ul",X,[(r(!0),o(u,null,x(s.playlists,f=>(r(),o("li",{key:f.id,class:"badge"},a(f.name),1))),128))])):(r(),o("span",Z,a(t.__("No playlist")),1))]),_:2},1032,["href"])]),e("td",ee,[l(i(c),{class:"flex flex-col items-start px-2 py-4",href:t.route("rooms.edit",s.id),tabindex:"-1"},{default:n(()=>[h(a(s.rounds_count),1)]),_:2},1032,["href"])]),e("td",te,[l(i(c),{class:"flex flex-col items-start px-2 py-4",href:t.route("rooms.edit",s.id),tabindex:"-1"},{default:n(()=>[e("span",{class:N(["badge",s.password?"bg-neutral-600":"bg-teal-600  text-neutral-100"])},a(s.password?t.__("No"):t.__("Yes")),3),s.password?(r(),o("small",se,a(t.__("Password protected")),1)):m("",!0)]),_:2},1032,["href"])]),e("td",ae,[l(i(c),{class:"flex items-center px-4",href:t.route("rooms.edit",s.id),tabindex:"-1"},{default:n(()=>[l(g,{name:"cheveron-right",class:"block h-6 w-6 fill-gray-400"})]),_:2},1032,["href"])])]))),128)),d.rooms&&d.rooms.data.length===0?(r(),o("tr",re,[e("td",oe,a(t.__("No rooms found.")),1)])):m("",!0)])]),l(R,{links:d.rooms.links},null,8,["links"])]),_:1})):(r(),o("div",le,[e("div",ie,[e("h2",de,a(t.__("Rooms")),1),ne,e("div",ce,[l(i(c),{class:"btn-primary btn-lg",href:t.route("rooms.create")},{default:n(()=>[h(a(t.__("Create my first room")),1)]),_:1},8,["href"])])])]))]),_:1})],64))}};export{Ve as default};