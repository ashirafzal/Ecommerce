@extends('layouts.main')
@section('content')
<style>
    body {
        font-size: 14px;
    }

    .text-left{
        color: #000;
    }

    .container{
        padding: 2rem;
        padding-right: 4rem;
        padding-left: 4rem;
    }

    .form-check-label {
        margin-left: 16px;
    }
</style>
<div class="container border">
    <h1 class="text-center text-dark">Our Company Policy</h1>
    <br><br>
    <h4>1. Terms of Service</h4>
    <p class="text-left">
        You need to iron out your e-commerce business’s Terms of Service as soon as your business opens its proverbial doors. Terms of Service — also known as Terms of Use,
        Terms and Conditions, or Disclaimers — describe the regulations that you attach to your e-commerce business. Visitors have to agree to these Terms of Service to use
        your site.

        Through your Terms of Service policy, you can do the following:

        list prohibited user actions on your website
        reserve the right to delete accounts if the user violates these terms
        preserve ownership of the content on your site
        E-commerce businesses aren’t legally required to have Terms of Service policies, but it’s a good idea to create one nonetheless so that you can regulate user activity
        on your site. Having Terms of Service also lowers the likelihood of customer lawsuits against your business, as long as they are enforceable and fair under state and
        federal law.
    </p>
    <h4>2. Privacy policy</h4>
    <p class="text-left">
        Unlike a Terms of Service policy, a privacy policy is required by law. Under the GDPR mentioned earlier, e-commerce businesses must have privacy policies that achieve the following ends:

        Obtain customer consent for data processing
        Anonymize data to protect customer privacy
        Guarantee notification in the event of a data breach
        Explain careful cross-border data transfers
        Provide a dedicated data protection officer (for some companies)
        Though the GDPR is an EU regulation, it applies to all websites that market goods or services to EU residents. So, unless you can guarantee that your e-commerce business is inaccessible for EU residents, you’ll need to create a GDPR-compliant privacy policy.

        The good news? Many sites provide online scripts to help you create a personalized and compliant privacy policy for your e-commerce business.
    </p>
    <h4>3. Returns and exchanges policy</h4>
    <p class="text-left">
        Will your e-commerce business offer returns or exchanges? You’ll need to iron out your returns policy before you ship out your first order. Your returns policy should answer the following questions:

        Do you offer returns?
        Do you offer exchanges?
        What’s the procedure for returns or exchanges?
        Is free shipping available for returns or exchanges?
        How will customers receive refunds for returns?
        Is there a limited time frame for returns or exchanges?
        Are there any other conditions for returns or exchanges?
        Again, many returns and exchanges policy templates are available online. However, because these policies are so unique to each individual business, make sure your final product fully reflects your actual practices surrounding returns and exchanges.
    </p>
    <h4>4. Shipping policy</h4>
    <p class="text-left">
        Through your e-commerce business’s shipping policy, you need to delineate the details of how you will ship your customers’ purchases. This policy should include the shipping company options, the shipping speed options, pricing, handling times, and shipping restrictions. The more detailed your shipping policy, the more in-the-know your customers are. As a result of this knowledge, shoppers will be more in-tune with the details that will help them make the best purchase for their preferences.
    </p>
    <h4>5. Taxes</h4>
    <p class="text-left">
        Finally, you need to stay on top of the confusing tax laws that apply to e-commerce businesses. You need to charge sales tax on a transaction if a state government decides you have a nexus with its state.

        “Having nexus” in a state basically means that you’re doing business there. The tricky part is that many states define this differently — it could depend on your physical presence in the state, the number of transactions you do within the state, whether you gain revenues from an affiliation with a business or person in the state, or whether you use cookies or software on devices within the state. If you do have nexus in any given state, then you’ll need to register for the state sales tax permit.

        All of this will be legally required, so you won’t have any say in how you organize your sales taxes. But you will be able to decide how much of this process you reveal to your customers. Most customers expect to see the amount of sales tax included in their transactions.

        However, providing a description of how this amount is calculated couldn’t hurt, either. Again, the more information you give your customers, the more knowledgeable and empowered they’ll be to make the right decisions.
    </p>
</div>
@endsection