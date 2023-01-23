import{P as k,l as g,c as n,a as l,u as a,w as d,F as u,o as r,X as v,b as e,t as o,I as V,K as N,n as h,v as b,g as p,d as f,h as C,f as B,s as O}from"./app-f6824ecf.js";import{_ as R}from"./AdminLayout-dca5ea69.js";import{_ as y}from"./Icon-1ce38a62.js";import{t as T,p as $}from"./throttle-b11e308e.js";import{_ as j}from"./Pagination-1822251b.js";import{_ as P}from"./SearchFilter-1e869e2a.js";import{C as S}from"./Card-261bd2f6.js";import"./LanguageSwitcher-d168d683.js";import"./_plugin-vue_export-helper-c27b6911.js";import"./Dropdown-b8d92112.js";import"./_defineProperty-98183d58.js";import"./isSymbol-363e1f0a.js";import"./debounce-d2fd0fa0.js";const D={class:"mb-8 text-3xl font-bold"},F={class:"mb-6 flex items-center justify-between"},I=e("label",{class:"mt-4 block text-gray-700"},"Trashed:",-1),M=e("option",{value:null},null,-1),U=e("option",{value:"with"},"With Trashed",-1),z=e("option",{value:"only"},"Only Trashed",-1),E=[M,U,z],J=e("span",null,"Create",-1),K=e("span",{class:"hidden md:inline"}," Room",-1),L={class:"overflow-x-auto"},W={class:"w-full whitespace-nowrap"},X={class:"text-left font-bold"},Y={class:"px-2 pb-4 pt-6"},q={class:"px-2 pb-4 pt-6"},A={class:"px-2 pb-4 pt-6"},G={class:"px-2 pb-4 pt-6"},H={class:"px-2 pb-4 pt-6",colspan:"2"},Q={class:"border-t"},Z=["src"],ee={class:"flex flex-col"},se={class:"text-gray-500 truncate max-w-[18rem]"},te={class:"border-t"},le=["src"],oe={class:"border-t"},ae={class:"flex items-center px-2 py-4 text-sm"},re={class:"border-t"},ne={class:"flex items-center px-2 py-4 text-sm"},de={class:"border-t"},ie={class:"w-px border-t"},ce={key:0},he={class:"border-t px-2 py-4",colspan:"6"},Ne={__name:"Index",props:{filters:Object,rooms:Object},setup(m){const x=m,i=k({search:x.filters.search,trashed:x.filters.trashed});g(i,T(()=>{O.get("/admin/rooms",$(i),{remember:"forget",preserveState:!0})},150),{deep:!0});const w=()=>{i.reset()};return(t,_)=>(r(),n(u,null,[l(a(v),{title:"Rooms"}),l(R,null,{default:d(()=>[e("h1",D,"Rooms ("+o(m.rooms.total)+")",1),e("div",F,[l(P,{modelValue:a(i).search,"onUpdate:modelValue":_[1]||(_[1]=s=>a(i).search=s),class:"mr-4 w-full max-w-md",onReset:w},{default:d(()=>[I,V(e("select",{"onUpdate:modelValue":_[0]||(_[0]=s=>a(i).trashed=s),class:"form-select mt-1 w-full"},E,512),[[N,a(i).trashed]])]),_:1},8,["modelValue"]),l(a(h),{class:"btn-primary",href:t.route("admin.rooms.create")},{default:d(()=>[J,K]),_:1},8,["href"])]),l(S,null,{default:d(()=>[e("div",L,[e("table",W,[e("tr",X,[e("th",Y,o(t.__("Name")),1),e("th",q,o(t.__("Owner")),1),e("th",A,o(t.__("Moderators")),1),e("th",G,o(t.__("Playlists")),1),e("th",H,o(t.__("Public")),1)]),(r(!0),n(u,null,b(m.rooms.data,s=>(r(),n("tr",{key:s.id,class:"hover:bg-neutral-200"},[e("td",Q,[l(a(h),{class:"flex items-center px-2 py-4",href:t.route("admin.rooms.edit",s.id)},{default:d(()=>[s.photo?(r(),n("img",{key:0,class:"-my-2 mr-2 block h-10 w-10 rounded-full",src:s.photo},null,8,Z)):p("",!0),e("div",ee,[f(o(s.name)+" ",1),e("small",se,o(s.description),1)]),s.deleted_at?(r(),C(y,{key:1,name:"trash",class:"ml-2 h-3 w-3 flex-shrink-0 fill-gray-400"})):p("",!0)]),_:2},1032,["href"])]),e("td",te,[l(a(h),{class:"flex items-center px-2 py-4",href:t.route("admin.rooms.edit",s.id),tabindex:"-1"},{default:d(()=>[s.owner.photo?(r(),n("img",{key:0,class:"-my-2 mr-2 block h-10 w-10 rounded-full",src:s.owner.photo},null,8,le)):p("",!0),f(" "+o(s.owner.name),1)]),_:2},1032,["href"])]),e("td",oe,[e("ul",ae,[(r(!0),n(u,null,b(s.moderators,c=>(r(),n("li",{key:c.id},[l(a(h),{class:"m-1 rounded bg-neutral-300 p-1 hover:underline",href:t.route("admin.users.edit",c.id),tabindex:"-1"},{default:d(()=>[f(o(c.name),1)]),_:2},1032,["href"])]))),128))])]),e("td",re,[e("ul",ne,[(r(!0),n(u,null,b(s.playlists,c=>(r(),n("li",{key:c.id},[l(a(h),{class:"m-1 rounded bg-neutral-300 p-1 hover:underline",href:t.route("admin.playlists.edit",c.id),tabindex:"-1"},{default:d(()=>[f(o(c.name),1)]),_:2},1032,["href"])]))),128))])]),e("td",de,[l(a(h),{class:"flex items-center px-2 py-4",href:t.route("admin.rooms.edit",s.id),tabindex:"-1"},{default:d(()=>[e("span",{class:B(["m-1 rounded px-2 py-1",s.is_public?"bg-teal-600  text-neutral-100":"bg-neutral-300"])},o(s.is_public?t.__("Yes"):t.__("No")),3)]),_:2},1032,["href"])]),e("td",ie,[l(a(h),{class:"flex items-center px-4",href:t.route("admin.rooms.edit",s.id),tabindex:"-1"},{default:d(()=>[l(y,{name:"cheveron-right",class:"block h-6 w-6 fill-gray-400"})]),_:2},1032,["href"])])]))),128)),m.rooms.length===0?(r(),n("tr",ce,[e("td",he,o(t.__("No rooms found.")),1)])):p("",!0)])]),l(j,{links:m.rooms.links},null,8,["links"])]),_:1})]),_:1})],64))}};export{Ne as default};