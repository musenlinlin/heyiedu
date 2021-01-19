<template>
    <div>
        <el-time-picker v-model="value1" :picker-options="{selectableRange: '00:00:00 - 23:00:00'}" placeholder="选择时间"></el-time-picker>
    </div> 
</template>

<script>
export default {
    data () {
        return {
            timeOptions: {
                start: '05:30',
                step: '00:10',
                end: '06:00'
            },
            value1: new Date()
        };
    },
    methods: {
        formatTooltip(val) {
            return val / 100;   
        },
        handleChange(value){
            console.log(value);
        },
        // radioChange: function (rad) {
        //     console.log(rad);
        // }
        handleCheckAllChange(val) {
            this.checkedCities = val ? cityOptions : [];
            this.isIndeterminate = false;
        },
        handleCheckedCitiesChange(value) {
            let checkedCount = value.length;
            this.checkAll = checkedCount === this.cities.length;
            this.isIndeterminate = checkedCount > 0 && checkedCount < this.cities.length;
        },
        querySearch(queryString, cb) {
            var restaurants = this.restaurants;
            var results = queryString ? restaurants.filter(this.createFilter(queryString)) : restaurants;
            cb(results);
        },
        createFilter(queryString) {
            // 返回一个过滤函数
            return (restaurant) => {
                return (restaurant.value.toLowerCase().indexOf(queryString.toLowerCase()) === 0);
            }
        },
        querySearchAsync(queryString, cb) {
            var restaurants = this.restaurants;
            var results = queryString ? restaurants.filter(this.createStateFilter(queryString)) : restaurants;
            clearTimeout(this.timeout);
            this.timeout = setTimeout(() => {
                cb(results);
            }, 3000 * Math.random());
        },
        loadAll() {
            return [
                {"value": "世界现代设计史", 'author': "王受之"},
                {"value": "中国工艺美术史", "author": "田自秉"}
            ]
        },
        handleSelect(item) {
            console.log(item);
        },
        handleIconClick(ev) {
            console.log(ev);
        }
    },
    mounted(){
        this.restaurants = this.loadAll();
    }
};
</script>

<style lang="scss" scoped>
.el-select .el-input {
    width: 130px;
}
.my-autocomplete {
    li {
        line-height: normal;
        padding: 7px;
        
        .name {
            text-overflow: ellipsis;
            overflow: hidden;
        }
        .author {
            font-size: 12px;
            color: #b4b4b4;
        }
        .highlighted .addr {
            color: #ddd;
        }
    }
}
</style>

