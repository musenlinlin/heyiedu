<template>
    <div>
        


        <el-input placeholder="请输入内容" suffix-icon="el-icon-date" v-model="input1"></el-input>
        <el-input placeholder="请输入内容" suffix-icon="el-icon-date" v-model="input2" size="medium"></el-input>
        <el-input placeholder="请输入内容" suffix-icon="el-icon-date" v-model="input2" size="small"></el-input>
        <el-input placeholder="请输入内容" suffix-icon="el-icon-date" v-model="input2" size="mini"></el-input>

        <el-radio v-model="radio" label="1">备选项</el-radio>
        <el-radio v-model="radio" label="2">备选项</el-radio>
        
        <el-radio disabled v-model="radio" label="禁用">备选项</el-radio>
        <el-radio disabled v-model="radio" label="选中且禁用">备选项</el-radio>

        <el-radio-group v-model="radio">
            <el-radio :label="3">备选项</el-radio>
            <el-radio :label="6">备选项</el-radio>
            <el-radio :label="9">备选项</el-radio>
        </el-radio-group>

        <el-radio-group v-model="radio1">
            <el-radio-button label="上海"></el-radio-button>
            <el-radio-button label="北京"></el-radio-button>
            <el-radio-button label="广州"></el-radio-button>
            <el-radio-button label="深圳"></el-radio-button>
        </el-radio-group>

        <div style="margin-top: 20px">
            <el-radio-group v-model="radio2" size="medium">
                <el-radio-button label="上海"></el-radio-button>
                <el-radio-button label="北京"></el-radio-button>
                <el-radio-button label="广州"></el-radio-button>
                <el-radio-button label="深圳"></el-radio-button>
            </el-radio-group>
        </div>

        <div style="margin-top: 20px">
            <el-radio-group v-model="radio3" size="small" @change="radioChange">
                <el-radio-button label="上海1"></el-radio-button>
                <el-radio-button label="北京1"></el-radio-button>
                <el-radio-button label="广州1"></el-radio-button>
                <el-radio-button label="深圳1"></el-radio-button>
            </el-radio-group>
        </div>

        <div style="margin-top: 20px">
            <el-radio-group v-model="radio4" size="mini" disabled>
                <el-radio-button label="上海"></el-radio-button>
                <el-radio-button label="北京" disabled></el-radio-button>
                <el-radio-button label="广州"></el-radio-button>
                <el-radio-button label="深圳"></el-radio-button>
            </el-radio-group>
        </div>
        <el-radio v-model="radio1" label="1" border>备选项1</el-radio>
        <el-radio v-model="radio1" label="2" border>备选项1</el-radio>

        <el-checkbox v-model="checked">备选项</el-checkbox>

        <el-checkbox v-model="checked1" disabled>备选项1</el-checkbox>
        <el-checkbox v-model="checked2" disabled>备选项2</el-checkbox>

        <el-checkbox-group v-model="checkList">
            <el-checkbox label="复选框A"></el-checkbox>
            <el-checkbox label="复选框B"></el-checkbox>
            <el-checkbox label="复选框C"></el-checkbox>
            <el-checkbox label="禁用" disabled></el-checkbox>
        </el-checkbox-group>

        
        <el-checkbox :indeterminate="isIndeterminate" v-model="checkAll" @change="handleCheckAllChange">全选</el-checkbox>
        <div style="margin: 15px 0;"></div>
        <el-checkbox-group v-model="checkedCities" @change="handleCheckedCitiesChange">
            <el-checkbox v-for="city in cities" :label="city" :key="city">{{city}}</el-checkbox>
        </el-checkbox-group>

        <el-checkbox-group v-model="checkedCities" :min="1" :max="2">
            <el-checkbox v-for="city in cities" :label="city" :key="city">{{city}}</el-checkbox>
        </el-checkbox-group>

        <el-checkbox-group v-model="checkboxGroup1">
            <el-checkbox-button v-for="city in cities" :label="city" :key="city">{{city}}</el-checkbox-button>
        </el-checkbox-group>

        <el-checkbox v-model="checked1" label="备选项1" border></el-checkbox>
        <el-checkbox v-model="checked2" label="备选项2" border></el-checkbox>

        <el-input v-model="input" placeholder="请输入内容"></el-input>
        <el-input v-model="input" placeholder="请输入内容" :disabled="true"></el-input>

        <el-input v-model="input" placeholder="请输入内容" clearable></el-input>

        <el-input v-model="input" placeholder="请输入密码" show-password></el-input>
        <div class="demo-input-suffix">
            <el-input placeholder="请选择日期" suffix-icon="el-icon-date" v-model="input1"></el-input>
            <el-input placeholder="请输入内容" prefix-icon="el-icon-search" v-model="input2"></el-input>
        </div>
        <div class="demo-input-suffix">
            <el-input placeholder="请选择日期" v-model="input3">
                <i slot="suffix" class="el-input__icon el-icon-date"></i>
            </el-input>
            <el-input placeholder="请输入内容" v-model="input4">
                <i slot="prefix" class="el-input__icon el-icon-search"></i>
            </el-input>
        </div>
        <el-input type="textarea" :rows="2" placeholder="请输入内容" v-model="textarea"></el-input>

        <el-input type="textarea" autosize placeholder="请输入内容" v-model="textareal"></el-input>
        <el-input type="textarea" :autosize="{minRows: 2, maxRows: 4}" placeholder="请输入内容" v-model="textarea2"></el-input>

        <el-input placeholder="请输入内容" v-model="input1">
            <template slot="prepend">Http://</template>
        </el-input>

        <el-input placeholder="请输入内容" v-model="input2">
            <template slot="append">.com</template>
        </el-input>

        <el-input placeholder="请输入内容" v-model="input3" class="input-with-select">
            <el-select v-model="select" slot="prepend" placeholder="请选择">
                <el-option label="餐厅名" value="1"></el-option>
                <el-option label="订单名" value="2"></el-option>
                <el-option label="用户电话" value="3"></el-option>
            </el-select>
            <el-button slot="append" icon="el-icon-search"></el-button>
        </el-input>

    </div>
</template>

<script>
const cityOptions = ['上海', '北京', '广州', '深圳'];
export default {
    data () {
        return {
            // radio: '1'
            // radio: '选中且禁用',
            // radio1: '上海',
            // radio2: '上海',
            // radio3: '上海',
            // radio4: '上海',
            // checked: true,
            // checked1: false,
            // checked2: true,
            // checkList: ['复选框A', '复选框B']
            checkAll: false,
            checkedCities: ['上海', '北京'],
            cities: cityOptions,
            isIndeterminate: true,
            checkboxGroup1: ['上海'],
            checked1: true,
            checked2: false,
            input: '',
            select: ''
        };
    },
    methods: {
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
        }
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
        .addr {
            font-size: 12px;
            color: #b4b4b4;
        }
        .highlighted .addr {
            color: #ddd;
        }
    }
}
</style>

