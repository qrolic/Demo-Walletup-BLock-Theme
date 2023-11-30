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
  const { Heading, mediaURL, description } = props.attributes;
  return (
    <section id="skill-boost" {...useBlockProps.save()}>
      <div className="skill-boost">
        <div className="container p-0">
          <div className="skill-boost__inner">
            <div className="row">
              <div className="col-lg-6 col-md-6">
                <div className="skill-boost__inner_heading">
                  <RichText.Content tagName="h2" value={Heading} />
                </div>
                <div className="skill-boost__inner_description">
                  <RichText.Content tagName="p" value={description} />
                </div>
              </div>
              <div className="col-lg-6 col-md-6">
                <div className="skill-boost__inner_img">
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
