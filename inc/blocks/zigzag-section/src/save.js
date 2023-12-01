/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, RichText } from "@wordpress/block-editor";

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {Element} Element to render.
 */
export default function save(props) {
  const { Heading, mediaURL, buttonText } = props.attributes;
  return (
    <section id="zig-zag" {...useBlockProps.save()}>
      <div className="zig-zag">
        <div className="container p-0">
          <div className="zig-zag__inner">
            <div className="row">
              <div className="col-lg-7 col-md-7 col-12">
                <div className="zig-zag__inner_heading">
                  <RichText.Content tagName="h2" value={Heading} />
                </div>
                <div className="zig-zag__inner_button">
                  <RichText.Content tagName="a" value={buttonText} />
                </div>
              </div>
              <div className="col-lg-5 col-md-5 col-12">
                <div className="zig-zag__inner_img">
                  <img src={mediaURL} />
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  );
}
