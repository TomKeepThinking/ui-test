<div class="h-1 relative max-w-xl rounded-full overflow-hidden" >
    <div class="w-full h-full bg-gray-200 absolute top-0"></div>
    <div :class="{'w-0':currentTab !== tab.id, 'w-full duration-1000':currentTab === tab.id}"
         :style="currentTab === tab.id ? transformOrigin :  transformOrigin2"
         class="h-full bg-red absolute top-0 transition-all ease-out"></div>
</div>
