{{ content() }}
{{ form("Products/save", "method":"post") }}

<table width="100%">
    <tr>
        <td align="left">{{ link_to("Products", "Go Back") }}</td>
        <td align="right">{{ submit_button("Save") }}</td>
    <tr>
</table>

<div align="center">
    <h1>Edit Products</h1>
</div>

<table>
    <tr>
        <td align="right">
            <label for="products_types_id">Products Of Types</label>
        </td>
        <td align="left">
            {{ text_field("products_types_id", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="name">Name</label>
        </td>
        <td align="left">
            {{ text_field("name", "type" : "numeric") }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="price">Price</label>
        </td>
        <td align="left">
            {{ text_field("price", "size" : 30) }}
        </td>
    </tr>
    <tr>
        <td align="right">
            <label for="active">Active</label>
        </td>
        <td align="left">
            {{ text_field("active", "size" : 30) }}
        </td>
    </tr>

    <tr>
        <td>{{ hidden_field("id") }}</td>
        <td>{{ submit_button("Save") }}</td>
    </tr>
</table>

</form>
